# Summary ::
Contains notebooks and scripts written in R and python for SpaceJam

#### 00 ::
- This notebook constructs an anndata object from the provided NanostringWTA data.

#### 01 ::
- Here we estimate cell type gene expression signatures from a public single-cell RNAseq dataset (Stewart et al. 2019). In the "01_cell2location_estimating_signatures.ipynb" notebook we use our Negative Binomial regression model to perform this task. We introduced this model in the recent cell2location preprint (Kleshchevnikov et al. 2020). In the "01_spatialDecon_estimating_signatures.ipynb" notebook we simply calculate the average gene expression across one cell type and use this later for the SpatialDecon algorithm.

#### 02 ::
- These two notebooks map celltypes to the nanostring WTA data. In the "02_cell2location_map_celltypes_allModels.ipynb" notebook we use three new variants of our cell2location model to perform this task. These variants are extensions of the models introduced in our cell2location preprint (Kleshchevnikov et al. 2020) and brain development preprint (Roberts &  Aivazidis et al. 2021) particularly suited to map the multi slide dataset in this hackathon.

#### 03 ::
-

#### 04 ::
-

#### 05 ::
-

#### 06 A2_V4_GSEA_cluster_summaries_from_DE_cytoscape.ipynb::
- A notebook written in R which utlises readily available tools to retrieve enriched genesets from the DE output for each comparator category. The GSEA output is then clustered by a graph dervied from a geneset similarity matrix and a simple annotation is made from semantic summarisation by frequency of tokenized terms. This tool requires cytoscape to function.

#### 07 ::
-

Kleshchevnikov et al. 2020: "Comprehensive mapping of tissue cell architecture via integrated single cell and spatial transcriptomics." bioRxiv.
Stewart et al. 2019, et al. "Spatiotemporal immune zonation of the human kidney." Science 365.6460: 1461-1466.
Roberts &  Aivazidis et al., "Transcriptome-wide spatial RNA profiling maps the cellular architecture of the developing human neocortex." bioRxiv (2021).
