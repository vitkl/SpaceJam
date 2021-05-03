# Run spatialDecon on NanostringWTA data

require(SpatialDecon)

norm = read.delim('/home/jovyan/data/jhubData/Kidney-Nanostring/Kidney_Q3Norm_TargetCountMatrix.txt', header = TRUE, sep = '\t', row.names = 1)
raw = read.table('/home/jovyan/data/jhubData/Kidney-Nanostring/Kidney_Raw_TargetCountMatrix.txt', header=TRUE, sep = '\t', row.names = 1)
meta = read.table('/home/jovyan/data/jhubData/Kidney-Nanostring/Kidney_Sample_Annotations.txt', header=TRUE, sep = '\t')

per.observation.mean.neg = norm["NegProbe", ]
bg = sweep(as.matrix(norm) * 0, 2, as.numeric(per.observation.mean.neg), "+")

cellProfiles = read.table('/home/jovyan/data/jhubData/Kidney-Nanostring/BenS_cellProfiles.csv', header=TRUE, sep = ',', row.names = 1)

res = spatialdecon(norm = as.matrix(norm),
                   bg = bg,
                   X = as.matrix(cellProfiles),
                   align_genes = TRUE,
                   cell_counts = as.numeric(meta$AOINucleiCount),
                   raw = as.matrix(raw))

write.table(t(res$beta), file = 'spatialDecon_results1.txt', sep = '\t', quote = F, row.names = T, col.names = T)
