# NetCDF Data Format Description — Marine X-band Radar Near-surface Current Measurements
_Generated on 2026-06-18 18:30 UTC_

## Table of Contents

[File: `skq_2026-01-07-18_currents.nc`](#file-skq_2026-01-07-18_currentsnc)  
&nbsp;&nbsp;[A. Overview](#a-overview)  
&nbsp;&nbsp;[B. Dimensions](#b-dimensions)  
&nbsp;&nbsp;[C. Variables](#c-variables)  
&nbsp;&nbsp;&nbsp;&nbsp;[a. Variable: `crs`](#a-variable-crs)  
&nbsp;&nbsp;&nbsp;&nbsp;[b. Variable: `eastward_sea_water_velocity`](#b-variable-eastward_sea_water_velocity)  
&nbsp;&nbsp;&nbsp;&nbsp;[c. Variable: `eastward_sea_water_velocity_standard_error`](#c-variable-eastward_sea_water_velocity_standard_error)  
&nbsp;&nbsp;&nbsp;&nbsp;[d. Variable: `latitude`](#d-variable-latitude)  
&nbsp;&nbsp;&nbsp;&nbsp;[e. Variable: `longitude`](#e-variable-longitude)  
&nbsp;&nbsp;&nbsp;&nbsp;[f. Variable: `mean_wavenumber`](#f-variable-mean_wavenumber)  
&nbsp;&nbsp;&nbsp;&nbsp;[g. Variable: `measurement`](#g-variable-measurement)  
&nbsp;&nbsp;&nbsp;&nbsp;[h. Variable: `measurement_quality`](#h-variable-measurement_quality)  
&nbsp;&nbsp;&nbsp;&nbsp;[i. Variable: `northward_sea_water_velocity`](#i-variable-northward_sea_water_velocity)  
&nbsp;&nbsp;&nbsp;&nbsp;[j. Variable: `northward_sea_water_velocity_standard_error`](#j-variable-northward_sea_water_velocity_standard_error)  
&nbsp;&nbsp;&nbsp;&nbsp;[k. Variable: `number_of_wave_coordinates`](#k-variable-number_of_wave_coordinates)  
&nbsp;&nbsp;&nbsp;&nbsp;[l. Variable: `time`](#l-variable-time)  
&nbsp;&nbsp;&nbsp;&nbsp;[m. Variable: `trajectory`](#m-variable-trajectory)  
&nbsp;&nbsp;[D. Global Attributes](#d-global-attributes)  
&nbsp;&nbsp;[E. Data Samples](#e-data-samples)  
&nbsp;&nbsp;&nbsp;&nbsp;[a.  `trajectory` (dims: _scalar_; dtype: |S1; shape: 1)](#a-trajectory-dims-_scalar_-dtype-s1-shape-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[b.  `crs` (dims: _scalar_; dtype: |S1; shape: 1)](#b-crs-dims-_scalar_-dtype-s1-shape-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[c.  `time` (dims: measurement; dtype: float64; shape: 5)](#c-time-dims-measurement-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[d.  `longitude` (dims: measurement; dtype: float64; shape: 5)](#d-longitude-dims-measurement-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[e.  `latitude` (dims: measurement; dtype: float64; shape: 5)](#e-latitude-dims-measurement-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[f.  `eastward_sea_water_velocity` (dims: measurement; dtype: float64; shape: 5)](#f-eastward_sea_water_velocity-dims-measurement-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[g.  `northward_sea_water_velocity` (dims: measurement; dtype: float64; shape: 5)](#g-northward_sea_water_velocity-dims-measurement-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[h.  `mean_wavenumber` (dims: measurement; dtype: float64; shape: 5)](#h-mean_wavenumber-dims-measurement-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[i.  `eastward_sea_water_velocity_standard_error` (dims: measurement; dtype: float64; shape: 5)](#i-eastward_sea_water_velocity_standard_error-dims-measurement-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[j.  `northward_sea_water_velocity_standard_error` (dims: measurement; dtype: float64; shape: 5)](#j-northward_sea_water_velocity_standard_error-dims-measurement-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[k.  `number_of_wave_coordinates` (dims: measurement; dtype: int64; shape: 5)](#k-number_of_wave_coordinates-dims-measurement-dtype-int64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[l.  `measurement_quality` (dims: measurement; dtype: uint8; shape: 5)](#l-measurement_quality-dims-measurement-dtype-uint8-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[m.  `measurement` (dims: measurement; dtype: int64; shape: 5)](#m-measurement-dims-measurement-dtype-int64-shape-5)  

---

## File: `skq_2026-01-07-18_currents.nc`

### A. Overview
- **Title**: Marine X-band radar near-surface current measurements with quality control flag from R/V Sikuliaq
- **Institution**: University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA
- **Conventions**: CF-1.11 SOMaR-0.2-draft
- *Coordinate System*: See variable `crs` and variable attribute `grid_mapping`
- *Compression & Encoding*: See per-variable compression specifications

### B. Dimensions
| Dimension | Size |
|---|---|
| `measurement` | 3851 |

### C. Variables
#### a. Variable: `crs`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `|S1`
- **Compression**: None

| Attribute | Value |
|---|---|
| `authority_string` | EPSG:4326 |
| `grid_mapping_name` | latitude_longitude |
| `inverse_flattening` | 298.257223563 |
| `longitude_of_prime_meridian` | 0.0 |
| `semi_major_axis` | 6378137.0 |


#### b. Variable: `eastward_sea_water_velocity`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | eastward component of the near surface current velocity |
| `standard_name` | eastward_sea_water_velocity |
| `units` | m s-1 |


#### c. Variable: `eastward_sea_water_velocity_standard_error`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | standard error of the eastward component of the near surface current velocity |
| `units` | m s-1 |


#### d. Variable: `latitude`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `grid_mapping` | crs |
| `long_name` | center latitude of current measurement |
| `standard_name` | latitude |
| `units` | degrees_north |


#### e. Variable: `longitude`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `grid_mapping` | crs |
| `long_name` | center longitude of current measurement |
| `standard_name` | longitude |
| `units` | degrees_east |


#### f. Variable: `mean_wavenumber`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | mean wavenumber of the wave signal used by the current measurement |
| `units` | radian m-1 |


#### g. Variable: `measurement`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `int64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | measurement identifier |
| `units` | 1 |


#### h. Variable: `measurement_quality`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `uint8`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `flag_meanings` | good_quality measurement_failed standard_error_above_threshold current_fit_boundaries_reached number_of_spatial_neighbors_below_threshold difference_from_all_spatial_neighbors_exceeds_threshold number_of_temporal_neighbors_below_threshold difference_from_all_temporal_neighbors_exceeds_threshold |
| `flag_values` | [ 0  1  2  4  8 16 32 64] |
| `long_name` | measurement quality (0: good, 1-127: bad) |
| `standard_name` | quality_flag |
| `valid_range` | [  0 127] |


#### i. Variable: `northward_sea_water_velocity`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | northward component of the near surface current velocity |
| `standard_name` | northward_sea_water_velocity |
| `units` | m s-1 |


#### j. Variable: `northward_sea_water_velocity_standard_error`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | standard error of the northward component of the near surface current velocity |
| `units` | m s-1 |


#### k. Variable: `number_of_wave_coordinates`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `int64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | number of wave coordinates used by the current measurement |
| `units` | 1 |


#### l. Variable: `time`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `calendar` | standard |
| `long_name` | start time of current measurement |
| `standard_name` | time |
| `units` | days since 2026-01-01T00:00:00Z |


#### m. Variable: `trajectory`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `|S1`
- **Compression**: None

| Attribute | Value |
|---|---|
| `cf_role` | trajectory_id |
| `long_name` | Current measurements along R/V Sikuliaq trajectory |

### D. Global Attributes
| Attribute | Value |
|---|---|
| `Conventions` | CF-1.11 SOMaR-0.2-draft |
| `comment` | The near-surface current vectors are obtained through least-squares fits that minimize the distance between the wave signal found in marine X-band radar backscatter intensity wavenumber frequency spectra and the linear ocean wave dispersion shell. Here, the spectra are based on 6.0060060060060065 min long radar backscatter intensity image sequences that are partitioned into 166 by 166 pixel analysis windows where all pixels outside of the circles that are inscribed in the analysis windows are set to zero. The resulting current maps have a fixed latitude spacing and a longitude spacing that is updated within 1-degree latitude bands to ensure an approximately constant grid resolution of 500.0 m. The spatial overlap between neighboring analysis windows is 50.0% and the temporal overlap between consecutive analysis periods is 33.3%. Analysis windows with a spatiotemporal data coverage of <90.0% are disregarded. Segments of the radar field of view that are obstructed by platform superstructures are also disregarded. The effective depth of the radar currents is a weighted mean of the upper ocean with the surface current carrying the greatest weight. It can be approximated as 4-8% of the underlying ocean wavelength depending on the shape of the current profile. Here, the current fit is based on the ocean wave signal between 0.1 and 0.3 rad m-1. |
| `contact` | blund@cstars.miami.edu |
| `featureType` | trajectory |
| `geospatial_lat_max` | -52.578 |
| `geospatial_lat_min` | -52.686 |
| `geospatial_lon_max` | -74.5936 |
| `geospatial_lon_min` | -74.93952 |
| `history` | 2026-01-07T19:45:08Z: File creation time |
| `institution` | University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA |
| `institution_id` | https://ror.org/02dgjyy92 |
| `instrument` | Sperry Marine VisionMaster noncoherent marine X-band radar with Rutter sigma S6 WaMoS II analog to digital converter |
| `licence` | Creative Commons Attribution 4.0 International Public License (CC BY 4.0) |
| `originator` | Bjoern Lund |
| `platform` | R/V Sikuliaq |
| `processing_software` | CSTARS X-band radar processing software version 2.4.0 written in Python 3.13.6 |
| `source` | Shipboard marine X-band radar |
| `time_coverage_end` | 2026-01-07T18:54:00Z |
| `time_coverage_start` | 2026-01-07T18:04:00Z |
| `title` | Marine X-band radar near-surface current measurements with quality control flag from R/V Sikuliaq |


### E. Data Samples
#### a.  `trajectory` (dims: _scalar_; dtype: |S1; shape: 1)
- **long_name**: Current measurements along R/V Sikuliaq trajectory
```
array(b'', dtype='|S1')
```

#### b.  `crs` (dims: _scalar_; dtype: |S1; shape: 1)
```
array(b'', dtype='|S1')
```

#### c.  `time` (dims: measurement; dtype: float64; shape: 5)
- **long_name**: start time of current measurement
- **standard_name**: time
- **units**: days since 2026-01-01T00:00:00Z
```
array([6.75278399, 6.75278399, 6.75278399, 6.75278399, 6.75278399])
```

#### d.  `longitude` (dims: measurement; dtype: float64; shape: 5)
- **long_name**: center longitude of current measurement
- **standard_name**: longitude
- **units**: degrees_east
```
array([-74.93952, -74.93952, -74.93216, -74.93216, -74.93216])
```

#### e.  `latitude` (dims: measurement; dtype: float64; shape: 5)
- **long_name**: center latitude of current measurement
- **standard_name**: latitude
- **units**: degrees_north
```
array([-52.605 , -52.6005, -52.641 , -52.605 , -52.6005])
```

#### f.  `eastward_sea_water_velocity` (dims: measurement; dtype: float64; shape: 5)
- **long_name**: eastward component of the near surface current velocity
- **standard_name**: eastward_sea_water_velocity
- **units**: m s-1
```
array([0.23847166, 0.36341958, 0.1256754 , 0.3084851 , 0.35695824])
```

#### g.  `northward_sea_water_velocity` (dims: measurement; dtype: float64; shape: 5)
- **long_name**: northward component of the near surface current velocity
- **standard_name**: northward_sea_water_velocity
- **units**: m s-1
```
array([-0.10657389, -0.50005305, -0.57984689, -0.47703116, -0.46045258])
```

#### h.  `mean_wavenumber` (dims: measurement; dtype: float64; shape: 5)
- **long_name**: mean wavenumber of the wave signal used by the current measurement
- **units**: radian m-1
```
array([0.08356992, 0.09857567, 0.10201743, 0.09838675, 0.10304121])
```

#### i.  `eastward_sea_water_velocity_standard_error` (dims: measurement; dtype: float64; shape: 5)
- **long_name**: standard error of the eastward component of the near surface current velocity
- **units**: m s-1
```
array([0.01827055, 0.01364303, 0.01898912, 0.01070099, 0.01133022])
```

#### j.  `northward_sea_water_velocity_standard_error` (dims: measurement; dtype: float64; shape: 5)
- **long_name**: standard error of the northward component of the near surface current velocity
- **units**: m s-1
```
array([0.04857037, 0.01314972, 0.01558771, 0.00968407, 0.0099141 ])
```

#### k.  `number_of_wave_coordinates` (dims: measurement; dtype: int64; shape: 5)
- **long_name**: number of wave coordinates used by the current measurement
- **units**: 1
```
array([ 885, 1827, 2193, 2851, 2559])
```

#### l.  `measurement_quality` (dims: measurement; dtype: uint8; shape: 5)
- **long_name**: measurement quality (0: good, 1-127: bad)
- **standard_name**: quality_flag
```
array([32, 32, 32, 32, 64], dtype=uint8)
```

#### m.  `measurement` (dims: measurement; dtype: int64; shape: 5)
- **long_name**: measurement identifier
- **units**: 1
```
array([0, 1, 2, 3, 4])
```
