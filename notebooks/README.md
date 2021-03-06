# Summary ::
Contains notebooks and scripts written in R and python for SpaceJam

#### 00_ConstructAnnDataObject.ipynb ::
- This notebook constructs an anndata object from the provided NanostringWTA data.

#### 01_cell2location_estimating_signatures.ipynb, 01_spatialDecon_estimating_signatures.ipynb::
- Here we estimate cell type gene expression signatures from a public reference single-cell RNAseq dataset (Stewart et al. 2019). In the "01_cell2location_estimating_signatures.ipynb" notebook we use our Negative Binomial regression model to perform this task. We introduced this model in the recent cell2location preprint (Kleshchevnikov et al. 2020). In the "01_spatialDecon_estimating_signatures.ipynb" notebook we simply calculate the average gene expression across one cell type and use this later for the SpatialDecon algorithm.

#### 02_cell2location_map_celltypes_MultiExperimentHierarchicalGeneLevel.ipynb, 02_spatialDecon_map_celltypes.R::
- These two notebooks map celltypes to the nanostring WTA data. In the "02_cell2location_map_celltypes_MultiExperimentHierarchicalGeneLevel.ipynb" notebook we use a  new variant of our cell2location model to perform this task. This variant is an extention of the models introduced in our cell2location preprint (Kleshchevnikov et al. 2020) and brain development preprint (Roberts &  Aivazidis et al. 2021) particularly suited to model the multi slide Nanostring WTA dataset in this hackathon. For comparison we also map cell types using the SpatialDecon algorithm in the second notebook called "02_spatialDecon_map_celltypes.R".

#### 03_cell2location_celltypes_density.ipynb, 03_cell2location_visualise_celltypes.ipynb, 03_cell2location_visualise_celltypes_MultiExperimentHierarchicalGeneLevel.ipynb, 03_cell2location_visualise_celltypes_SpatialDecon.ipynb::
- The "03_cell2location_celltypes_density.ipynb" notebook converts cell abundance estimates from cell2location and SpatialDecon to densities and prepares the data from plotting. The other three notebooks visualize the cell type density estimates.

#### 04_countcorrect_getCorrectedDataMatrix.ipynb, 05_countcorrect_getCorrectedDataMatrix_forCPU.ipynb::
- These two notebooks remove background from the nanostringWTA data using our recently developed CountCorrect model introduced in the brain development preprint (Roberts &  Aivazidis et al. 2021). In the "04_countcorrect_getCorrectedDataMatrix_forCPU.ipynb" notebook we further provide the option for user without GPU to run CountCorrect faster (for less iterations) or use a quick naive background correction (which is equivalent to running CountCorrect for 0 iterations).

#### 05_countcorrect_differentialExpression.ipynb, 06_countcorrect_differentialExpression_forCPU.ipynb::
- Here we perform standard differential expression based on the CountCorrect count matrix.

#### 06 A2_V4_GSEA_cluster_summaries_from_DE_cytoscape.ipynb::
- A notebook written in R which utlises readily available tools to retrieve enriched genesets from the DE output for each comparator category. The GSEA output is then clustered by a graph dervied from a geneset similarity matrix and a simple annotation is made from semantic summarisation by frequency of tokenized terms. This tool requires cytoscape to function.

#### 07_cellphoneDB_prioritizeInteractions.ipynb::
- This notebook uses the output from the cellPhoneDB algorithm (https://www.cellphonedb.org/, Efremova et al. 2020) run on our reference single-cell RNAseq dataset (Stewart et al. 2019) and uses the NanostringWTA data to prioritize interactions. Briefly, we subset the significant interactions from CellPhoneDB to include only those with differentially expressed genes across the normal/CKD condition and celltypes actually present in each type of ROI based on the cell2location estimates. The output is an overview sankey plot for each type of ROI (Glomeruli Geometric Segment, tubule PanCK and tubule neg) and the prioritized cellPhoneDB output.

Kleshchevnikov et al. 2020: "Comprehensive mapping of tissue cell architecture via integrated single cell and spatial transcriptomics." bioRxiv. <br/>
Stewart et al. 2019: "Spatiotemporal immune zonation of the human kidney." Science 365.6460: 1461-1466. <br/>
Roberts &  Aivazidis et al. 2021: "Transcriptome-wide spatial RNA profiling maps the cellular architecture of the developing human neocortex." bioRxiv. <br/>
Efremova et al. 2020: "CellPhoneDB: inferring cell???cell communication from combined expression of multi-subunit ligand???receptor complexes." Nature protocols 15.4 : 1484-1506.
