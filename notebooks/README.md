# Summary ::
Contains notebooks and scripts written in R and python for SpaceJam

#### 00_ConstructAnnDataObject.ipynb ::
- This notebook constructs an anndata object from the provided NanostringWTA data.

#### 01_cell2location_estimating_signatures.ipynb, 01_spatialDecon_estimating_signatures.ipynb::
- Here we estimate cell type gene expression signatures from a public single-cell RNAseq dataset (Stewart et al. 2019). In the "01_cell2location_estimating_signatures.ipynb" notebook we use our Negative Binomial regression model to perform this task. We introduced this model in the recent cell2location preprint (Kleshchevnikov et al. 2020). In the "01_spatialDecon_estimating_signatures.ipynb" notebook we simply calculate the average gene expression across one cell type and use this later for the SpatialDecon algorithm.

#### 02_cell2location_map_celltypes_allModels.ipynb, 02_spatialDecon_map_celltypes.R::
- These two notebooks map celltypes to the nanostring WTA data. In the "02_cell2location_map_celltypes_allModels.ipynb" notebook we use three new variants of our cell2location model to perform this task. These variants are extensions of the models introduced in our cell2location preprint (Kleshchevnikov et al. 2020) and brain development preprint (Roberts &  Aivazidis et al. 2021) particularly suited to model the multi slide Nanostring WTA dataset in this hackathon. For comparison we also map cell types using the SpatialDecon algorithm in the second notebook called "02_spatialDecon_map_celltypes.R".

#### 03_cell2location_visualise_celltypes.ipynb, 03_cell2location_visualise_celltypes_MultiExperiment.ipynb, 03_cell2location_visualise_celltypes_MultiExperimentGeneLevel.ipynb, 03_cell2location_visualise_celltypes_MultiExperimentGeneLevel_HierarchicalGeneLevel.ipynb::
- These notebooks visualize the cell type density estimates returned from our cell2location models.

#### 04_countcorrect_getCorrectedDataMatrix.ipynb, 04_countcorrect_getCorrectedDataMatrix_forCPU.ipynb::
- These two notebooks remove background from the nanostringWTA data using our recently developed CountCorrect model introduced in the brain development preprint (Roberts &  Aivazidis et al. 2021). In the "04_countcorrect_getCorrectedDataMatrix_forCPU.ipynb" notebook we further provide the option for user without GPU to run CountCorrect faster (for less iterations) or use a quick naive background correction. 

#### 05_countcorrect_differentialExpression.ipynb, 05_countcorrect_differentialExpression_forCPU.ipynb::
- Here we perform standard differential expression based on the CountCorrect count matrix.

#### 06 A2_V4_GSEA_cluster_summaries_from_DE_cytoscape.ipynb::
- A notebook written in R which utlises readily available tools to retrieve enriched genesets from the DE output for each comparator category. The GSEA output is then clustered by a graph dervied from a geneset similarity matrix and a simple annotation is made from semantic summarisation by frequency of tokenized terms. This tool requires cytoscape to function.

#### 07_cellphoneDB_prioritizeInteractions.ipynb::
-

Kleshchevnikov et al. 2020: "Comprehensive mapping of tissue cell architecture via integrated single cell and spatial transcriptomics." bioRxiv. <br/>
Stewart et al. 2019: "Spatiotemporal immune zonation of the human kidney." Science 365.6460: 1461-1466. <br/>
Roberts &  Aivazidis et al. 2021: "Transcriptome-wide spatial RNA profiling maps the cellular architecture of the developing human neocortex." bioRxiv. <br/>
