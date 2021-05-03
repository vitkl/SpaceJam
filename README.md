![alt text](https://github.com/vitkl/SpaceJam/blob/main/logos/spacejam_icon.png)

Visit our interactive analysis portal here! (https://www.spacejam.tech/)



## Summary ::
This Repository contains open-source code, notebooks and template files to analyse the Kidney Nanostring data by combining multiple published and internally developed tools for the 
(http://nanostring-public-share.s3-website-us-west-2.amazonaws.com/GeoScriptHub/KidneyDataset/)

## Contents ::
#### Notebooks ::
- Contains notebooks and scripts for running SpaceJam as well as downnsteam analysis including clustered geneset annotation of differentially expressed genes and restricted cell-cell ligand receptor interaction prediction

#### SpaceJam Portal ::
- Contains notebooks in python and HTML,CSS,Javascript template files for creating an onine, interactive data exploration platform for Nanostring and Spacejam outputs.

# SpaceJam

## Inspiration
Nanostring WTA provides an incredible amount of information in their data. Our goal was to extract insights from this abundance with a focus on precise details rather than general conclusions.

## What it does
We made a cell type mapping model that can map many subtypes and not only general cell types to the Nanostring ROIs. We have a DE analysis workflow and pathway enrichment strategy that provides more precise and informative pathway enrichments. We can filter down the immense number of cell-cell interactions to the most relevant one using the information in Nanostring WTA data.

## Challenges we ran into
We faced challenges in ascertaining if the model was performing well and predicting biologically meaningful information. To this end, we did a short literature review and consulted with a nephrologist to better understand the DKD pathological landscape and approached any quantitative assessment of our outputs with these hypotheses in mind. 

## Accomplishments that we're proud of
Of particular interest is that the model predicts very well the characteristic celltype densities and abundances we would expect in given condition and anatomical loci. For example, when viewing the celltype abundance plots (available on our portal here: https://www.spacejam.tech/) , we see an increase in Myeloid (Macrophages and neutrophils) infiltrates in the glomerulus which agrees with known literature. We also see a decrease in predicted podocyte abundance and increase in B-lymphocyte abundance (consistent with literature on tertiary lymphoid aggregates in kidney damage). Finally, through clustered geneset annotation of differentially expressed genes between conditions in per anatomical loci, we also observed enrichment of TNF and IL6 modules, following an increase in TLR4 response modules. This is highly interesting and points at endothelial damage response and further work may point towards potential therapeutics to reduce damage due to inflammation.
 Through this approach we were also able to pinpoint specific chemotatic loci (panck Tubules) which were significantly enriched for myeloid extravasation. Furthermore, it is interesting that catecholamine production and response was significantly enriched in negative-tubules as this is concomitant with the increased urination phenotype observed in DKD.

## What's next for SpaceJam
Now we’re looking into further integrating different parts of our web portal to provide an even more smooth and productive way for scientists to work with GeoMx data. We believe that better visualisations could inspire and facilitate great biological discoveries! 
