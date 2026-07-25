# NetCDF Data Format Description — Marine X-band Radar Mean Sea Surface Roughness Mosaics
_Generated on 2026-06-18 18:30 UTC_

## Table of Contents

[File: `skq_2026-01-07-18_sea_surface_roughness_mosaic.nc`](#file-skq_2026-01-07-18_sea_surface_roughness_mosaicnc)  
&nbsp;&nbsp;[A. Overview](#a-overview)  
&nbsp;&nbsp;[B. Child groups under `/`](#b-child-groups-under-)  
&nbsp;&nbsp;[C. Global Attributes](#c-global-attributes)  
&nbsp;&nbsp;[D. Group: `/time_20260107180000`](#d-group-time_20260107180000)  
&nbsp;&nbsp;&nbsp;&nbsp;[a. Dimensions](#a-dimensions)  
&nbsp;&nbsp;&nbsp;&nbsp;[b. Variables](#b-variables)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[i. Variable: `crs`](#i-variable-crs)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ii. Variable: `crs_utm`](#ii-variable-crs_utm)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[iii. Variable: `mean_sea_surface_roughness`](#iii-variable-mean_sea_surface_roughness)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[iv. Variable: `number_of_observations`](#iv-variable-number_of_observations)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[v. Variable: `start_time_of_observations`](#v-variable-start_time_of_observations)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[vi. Variable: `time`](#vi-variable-time)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[vii. Variable: `trajectory`](#vii-variable-trajectory)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[viii. Variable: `x`](#viii-variable-x)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ix. Variable: `x_utm`](#ix-variable-x_utm)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[x. Variable: `y`](#x-variable-y)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[xi. Variable: `y_utm`](#xi-variable-y_utm)  
&nbsp;&nbsp;&nbsp;&nbsp;[c. Data Samples](#c-data-samples)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[i.  `trajectory` (dims: _scalar_; dtype: |S1; shape: 1)](#i-trajectory-dims-_scalar_-dtype-s1-shape-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ii.  `crs` (dims: _scalar_; dtype: |S1; shape: 1)](#ii-crs-dims-_scalar_-dtype-s1-shape-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[iii.  `crs_utm` (dims: _scalar_; dtype: |S1; shape: 1)](#iii-crs_utm-dims-_scalar_-dtype-s1-shape-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[iv.  `time` (dims: _scalar_; dtype: float64; shape: 1)](#iv-time-dims-_scalar_-dtype-float64-shape-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[v.  `mean_sea_surface_roughness` (dims: y, x; dtype: float32; shape: 5×5)](#v-mean_sea_surface_roughness-dims-y-x-dtype-float32-shape-55)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[vi.  `number_of_observations` (dims: y, x; dtype: int32; shape: 5×5)](#vi-number_of_observations-dims-y-x-dtype-int32-shape-55)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[vii.  `start_time_of_observations` (dims: y, x; dtype: float32; shape: 5×5)](#vii-start_time_of_observations-dims-y-x-dtype-float32-shape-55)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[viii.  `x_utm` (dims: x; dtype: float64; shape: 5)](#viii-x_utm-dims-x-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ix.  `y_utm` (dims: y; dtype: float64; shape: 5)](#ix-y_utm-dims-y-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[x.  `x` (dims: x; dtype: float64; shape: 5)](#x-x-dims-x-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[xi.  `y` (dims: y; dtype: float64; shape: 5)](#xi-y-dims-y-dtype-float64-shape-5)  
&nbsp;&nbsp;[E. Group: `/time_20260107181000`](#e-group-time_20260107181000)  
&nbsp;&nbsp;&nbsp;&nbsp;[a. Dimensions](#a-dimensions-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[b. Variables](#b-variables-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[i. Variable: `crs`](#i-variable-crs-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ii. Variable: `crs_utm`](#ii-variable-crs_utm-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[iii. Variable: `mean_sea_surface_roughness`](#iii-variable-mean_sea_surface_roughness-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[iv. Variable: `number_of_observations`](#iv-variable-number_of_observations-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[v. Variable: `start_time_of_observations`](#v-variable-start_time_of_observations-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[vi. Variable: `time`](#vi-variable-time-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[vii. Variable: `trajectory`](#vii-variable-trajectory-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[viii. Variable: `x`](#viii-variable-x-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ix. Variable: `x_utm`](#ix-variable-x_utm-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[x. Variable: `y`](#x-variable-y-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[xi. Variable: `y_utm`](#xi-variable-y_utm-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[c. Data Samples](#c-data-samples-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[i.  `trajectory` (dims: _scalar_; dtype: |S1; shape: 1)](#i-trajectory-dims-_scalar_-dtype-s1-shape-1-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ii.  `crs` (dims: _scalar_; dtype: |S1; shape: 1)](#ii-crs-dims-_scalar_-dtype-s1-shape-1-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[iii.  `crs_utm` (dims: _scalar_; dtype: |S1; shape: 1)](#iii-crs_utm-dims-_scalar_-dtype-s1-shape-1-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[iv.  `time` (dims: _scalar_; dtype: float64; shape: 1)](#iv-time-dims-_scalar_-dtype-float64-shape-1-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[v.  `mean_sea_surface_roughness` (dims: y, x; dtype: float32; shape: 5×5)](#v-mean_sea_surface_roughness-dims-y-x-dtype-float32-shape-55-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[vi.  `number_of_observations` (dims: y, x; dtype: int32; shape: 5×5)](#vi-number_of_observations-dims-y-x-dtype-int32-shape-55-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[vii.  `start_time_of_observations` (dims: y, x; dtype: float32; shape: 5×5)](#vii-start_time_of_observations-dims-y-x-dtype-float32-shape-55-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[viii.  `x_utm` (dims: x; dtype: float64; shape: 5)](#viii-x_utm-dims-x-dtype-float64-shape-5-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ix.  `y_utm` (dims: y; dtype: float64; shape: 5)](#ix-y_utm-dims-y-dtype-float64-shape-5-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[x.  `x` (dims: x; dtype: float64; shape: 5)](#x-x-dims-x-dtype-float64-shape-5-1)  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[xi.  `y` (dims: y; dtype: float64; shape: 5)](#xi-y-dims-y-dtype-float64-shape-5-1)  

---

## File: `skq_2026-01-07-18_sea_surface_roughness_mosaic.nc`

### A. Overview
- **Title**: Marine X-band radar temporally averaged sea surface roughness images from R/V Sikuliaq
- **Institution**: University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA
- **Conventions**: CF-1.11 SOMaR-0.2-draft
- *Coordinate System*: See variable `crs` and variable attribute `grid_mapping`
- *Compression & Encoding*: See per-variable compression specifications

### B. Child groups under `/`
- `time_20260107180000`
- `time_20260107181000`
- `time_20260107182000`
- `time_20260107183000`
- `time_20260107184000`
- `time_20260107185000`

### C. Global Attributes
| Attribute | Value |
|---|---|
| `Conventions` | CF-1.11 SOMaR-0.2-draft |
| `comment` | The sea surface roughness images are mosaics composed of approximately 469 consecutive radar backscatter intensity images, corresponding to 600.0 s. The images are corrected for ship motion and for the rapid radar backscatter intensity decay with range. Segments of the radar field of view that are obstructed by platform superstructures are disregarded. Each image pixel is a temporal average of approximately 23 consecutive radar backscatter intensity images. The averaging start time for each pixel varies across the image and is determined by the data availability and hence the ship track. |
| `contact` | blund@cstars.miami.edu |
| `featureType` | trajectory |
| `geospatial_lat_max` | -52.61389192520324 |
| `geospatial_lat_min` | -52.64521030995353 |
| `geospatial_lon_max` | -74.67224044304439 |
| `geospatial_lon_min` | -74.91572107225463 |
| `history` | 2026-01-07T19:46:36Z: File creation time |
| `institution` | University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA |
| `institution_id` | https://ror.org/02dgjyy92 |
| `instrument` | Sperry Marine VisionMaster noncoherent marine X-band radar with Rutter sigma S6 WaMoS II analog to digital converter |
| `licence` | Creative Commons Attribution 4.0 International Public License (CC BY 4.0) |
| `originator` | Bjoern Lund |
| `platform` | R/V Sikuliaq |
| `processing_software` | CSTARS X-band radar processing software version 2.4.0 written in Python 3.13.6 |
| `source` | Shipboard marine X-band radar |
| `time_coverage_end` | 2026-01-07T18:50:00Z |
| `time_coverage_start` | 2026-01-07T18:00:00Z |
| `title` | Marine X-band radar temporally averaged sea surface roughness images from R/V Sikuliaq |


### D. Group: `/time_20260107180000`
#### a. Dimensions
| Dimension | Size |
|---|---|
| `y` | 1369 |
| `x` | 1846 |

#### b. Variables
##### i. Variable: `crs`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `|S1`
- **Compression**: None

| Attribute | Value |
|---|---|
| `grid_mapping_name` | transverse_mercator |
| `inverse_flattening` | 298.257223563 |
| `latitude_of_projection_origin` | -52.61597982267053 |
| `longitude_of_prime_meridian` | 0.0 |
| `longitude_of_projection_origin` | -74.91572107225463 |
| `projected_crs_name` | WGS 84 / origin of coordinate sytem is radar location at measurement start time |
| `scale_factor_at_central_meridian` | 1.0 |
| `semi_major_axis` | 6378137.0 |


##### ii. Variable: `crs_utm`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `|S1`
- **Compression**: None

| Attribute | Value |
|---|---|
| `authority_string` | EPSG:32718 |
| `false_easting` | 500000.0 |
| `false_northing` | 10000000.0 |
| `grid_mapping_name` | transverse_mercator |
| `inverse_flattening` | 6356752.314245179 |
| `latitude_of_projection_origin` | 0.0 |
| `longitude_of_prime_meridian` | 0.0 |
| `longitude_of_projection_origin` | -75.0 |
| `projected_crs_name` | WGS 84 / UTM zone 18S |
| `scale_factor_at_central_meridian` | 0.9996 |
| `semi_major_axis` | 6378137.0 |


##### iii. Variable: `mean_sea_surface_roughness`
- **Dimensions**: y, x
- **Shape**: 1369×1846
- **Data type**: `float32`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `ancillary_variables` | number_of_observations start_time_of_observations |
| `grid_mapping` | crs: x y crs_utm: x_utm y_utm |
| `long_name` | temporally averaged radar backscatter intensity in uncalibrated analog-to-digital converter units |
| `units` | 1 |


##### iv. Variable: `number_of_observations`
- **Dimensions**: y, x
- **Shape**: 1369×1846
- **Data type**: `int32`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `grid_mapping` | crs: x y crs_utm: x_utm y_utm |
| `long_name` | number of measurements from which the radar backscatter intensity averages have been derived |
| `standard_name` | number_of_observations |
| `units` | 1 |


##### v. Variable: `start_time_of_observations`
- **Dimensions**: y, x
- **Shape**: 1369×1846
- **Data type**: `float32`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `grid_mapping` | crs: x y crs_utm: x_utm y_utm |
| `long_name` | start time of the radar backscatter intensity averages in seconds after the global `time` attribute |
| `units` | s |


##### vi. Variable: `time`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `float64`
- **Compression**: None

| Attribute | Value |
|---|---|
| `calendar` | standard |
| `long_name` | start time of radar measurement |
| `standard_name` | time |
| `time` | 6.750002598113426 |
| `time_iso_8601` | 2026-01-07T18:00:00.224477Z |
| `units` | days since 2026-01-01T00:00:00Z |


##### vii. Variable: `trajectory`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `|S1`
- **Compression**: None

| Attribute | Value |
|---|---|
| `cf_role` | trajectory_id |
| `long_name` | Mean sea surface roughness measurements along R/V Sikuliaq trajectory |


##### viii. Variable: `x`
- **Dimensions**: x
- **Shape**: 1846
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | distance from radar along grid x-axis at measurement start time |
| `standard_name` | projection_x_coordinate |
| `units` | m |


##### ix. Variable: `x_utm`
- **Dimensions**: x
- **Shape**: 1846
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | easting along grid x-axis |
| `standard_name` | projection_x_coordinate |
| `units` | m |


##### x. Variable: `y`
- **Dimensions**: y
- **Shape**: 1369
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | distance from radar along grid y-axis at measurement start time |
| `standard_name` | projection_y_coordinate |
| `units` | m |


##### xi. Variable: `y_utm`
- **Dimensions**: y
- **Shape**: 1369
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | northing along grid y-axis |
| `standard_name` | projection_y_coordinate |
| `units` | m |

#### c. Data Samples
##### i.  `trajectory` (dims: _scalar_; dtype: |S1; shape: 1)
- **long_name**: Mean sea surface roughness measurements along R/V Sikuliaq trajectory
```
array(b'', dtype='|S1')
```

##### ii.  `crs` (dims: _scalar_; dtype: |S1; shape: 1)
```
array(b'', dtype='|S1')
```

##### iii.  `crs_utm` (dims: _scalar_; dtype: |S1; shape: 1)
```
array(b'', dtype='|S1')
```

##### iv.  `time` (dims: _scalar_; dtype: float64; shape: 1)
- **long_name**: start time of radar measurement
- **standard_name**: time
- **units**: days since 2026-01-01T00:00:00Z
```
array(9.96920997e+36)
```

##### v.  `mean_sea_surface_roughness` (dims: y, x; dtype: float32; shape: 5×5)
- **long_name**: temporally averaged radar backscatter intensity in uncalibrated analog-to-digital converter units
- **units**: 1
```
array([[nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan]], dtype=float32)
```

##### vi.  `number_of_observations` (dims: y, x; dtype: int32; shape: 5×5)
- **long_name**: number of measurements from which the radar backscatter intensity averages have been derived
- **standard_name**: number_of_observations
- **units**: 1
```
array([[0, 0, 0, 0, 0],
       [0, 0, 0, 0, 0],
       [0, 0, 0, 0, 0],
       [0, 0, 0, 0, 0],
       [0, 0, 0, 0, 0]], dtype=int32)
```

##### vii.  `start_time_of_observations` (dims: y, x; dtype: float32; shape: 5×5)
- **long_name**: start time of the radar backscatter intensity averages in seconds after the global `time` attribute
- **units**: s
```
array([[nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan]], dtype=float32)
```

##### viii.  `x_utm` (dims: x; dtype: float64; shape: 5)
- **long_name**: easting along grid x-axis
- **standard_name**: projection_x_coordinate
- **units**: m
```
array([500538.37254572, 500545.86735722, 500553.36216872, 500560.85698022, 500568.35179172])
```

##### ix.  `y_utm` (dims: y; dtype: float64; shape: 5)
- **long_name**: northing along grid y-axis
- **standard_name**: projection_y_coordinate
- **units**: m
```
array([4165351.10240094, 4165358.59721244, 4165366.09202394, 4165373.58683544, 4165381.08164694])
```

##### x.  `x` (dims: x; dtype: float64; shape: 5)
- **long_name**: distance from radar along grid x-axis at measurement start time
- **standard_name**: projection_x_coordinate
- **units**: m
```
array([-5167.67252925, -5160.17771775, -5152.68290625, -5145.18809475, -5137.69328325])
```

##### xi.  `y` (dims: y; dtype: float64; shape: 5)
- **long_name**: distance from radar along grid y-axis at measurement start time
- **standard_name**: projection_y_coordinate
- **units**: m
```
array([-5092.72441425, -5085.22960275, -5077.73479125, -5070.23997975, -5062.74516825])
```

### E. Group: `/time_20260107181000`
#### a. Dimensions
| Dimension | Size |
|---|---|
| `y` | 1381 |
| `x` | 1850 |

#### b. Variables
##### i. Variable: `crs`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `|S1`
- **Compression**: None

| Attribute | Value |
|---|---|
| `grid_mapping_name` | transverse_mercator |
| `inverse_flattening` | 298.257223563 |
| `latitude_of_projection_origin` | -52.61530630743889 |
| `longitude_of_prime_meridian` | 0.0 |
| `longitude_of_projection_origin` | -74.86570539664454 |
| `projected_crs_name` | WGS 84 / origin of coordinate sytem is radar location at measurement start time |
| `scale_factor_at_central_meridian` | 1.0 |
| `semi_major_axis` | 6378137.0 |


##### ii. Variable: `crs_utm`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `|S1`
- **Compression**: None

| Attribute | Value |
|---|---|
| `authority_string` | EPSG:32718 |
| `false_easting` | 500000.0 |
| `false_northing` | 10000000.0 |
| `grid_mapping_name` | transverse_mercator |
| `inverse_flattening` | 6356752.314245179 |
| `latitude_of_projection_origin` | 0.0 |
| `longitude_of_prime_meridian` | 0.0 |
| `longitude_of_projection_origin` | -75.0 |
| `projected_crs_name` | WGS 84 / UTM zone 18S |
| `scale_factor_at_central_meridian` | 0.9996 |
| `semi_major_axis` | 6378137.0 |


##### iii. Variable: `mean_sea_surface_roughness`
- **Dimensions**: y, x
- **Shape**: 1381×1850
- **Data type**: `float32`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `ancillary_variables` | number_of_observations start_time_of_observations |
| `grid_mapping` | crs: x y crs_utm: x_utm y_utm |
| `long_name` | temporally averaged radar backscatter intensity in uncalibrated analog-to-digital converter units |
| `units` | 1 |


##### iv. Variable: `number_of_observations`
- **Dimensions**: y, x
- **Shape**: 1381×1850
- **Data type**: `int32`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `grid_mapping` | crs: x y crs_utm: x_utm y_utm |
| `long_name` | number of measurements from which the radar backscatter intensity averages have been derived |
| `standard_name` | number_of_observations |
| `units` | 1 |


##### v. Variable: `start_time_of_observations`
- **Dimensions**: y, x
- **Shape**: 1381×1850
- **Data type**: `float32`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `grid_mapping` | crs: x y crs_utm: x_utm y_utm |
| `long_name` | start time of the radar backscatter intensity averages in seconds after the global `time` attribute |
| `units` | s |


##### vi. Variable: `time`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `float64`
- **Compression**: None

| Attribute | Value |
|---|---|
| `calendar` | standard |
| `long_name` | start time of radar measurement |
| `standard_name` | time |
| `time` | 6.7569485306828705 |
| `time_iso_8601` | 2026-01-07T18:10:00.353051Z |
| `units` | days since 2026-01-01T00:00:00Z |


##### vii. Variable: `trajectory`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `|S1`
- **Compression**: None

| Attribute | Value |
|---|---|
| `cf_role` | trajectory_id |
| `long_name` | Mean sea surface roughness measurements along R/V Sikuliaq trajectory |


##### viii. Variable: `x`
- **Dimensions**: x
- **Shape**: 1850
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | distance from radar along grid x-axis at measurement start time |
| `standard_name` | projection_x_coordinate |
| `units` | m |


##### ix. Variable: `x_utm`
- **Dimensions**: x
- **Shape**: 1850
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | easting along grid x-axis |
| `standard_name` | projection_x_coordinate |
| `units` | m |


##### x. Variable: `y`
- **Dimensions**: y
- **Shape**: 1381
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | distance from radar along grid y-axis at measurement start time |
| `standard_name` | projection_y_coordinate |
| `units` | m |


##### xi. Variable: `y_utm`
- **Dimensions**: y
- **Shape**: 1381
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | northing along grid y-axis |
| `standard_name` | projection_y_coordinate |
| `units` | m |

#### c. Data Samples
##### i.  `trajectory` (dims: _scalar_; dtype: |S1; shape: 1)
- **long_name**: Mean sea surface roughness measurements along R/V Sikuliaq trajectory
```
array(b'', dtype='|S1')
```

##### ii.  `crs` (dims: _scalar_; dtype: |S1; shape: 1)
```
array(b'', dtype='|S1')
```

##### iii.  `crs_utm` (dims: _scalar_; dtype: |S1; shape: 1)
```
array(b'', dtype='|S1')
```

##### iv.  `time` (dims: _scalar_; dtype: float64; shape: 1)
- **long_name**: start time of radar measurement
- **standard_name**: time
- **units**: days since 2026-01-01T00:00:00Z
```
array(9.96920997e+36)
```

##### v.  `mean_sea_surface_roughness` (dims: y, x; dtype: float32; shape: 5×5)
- **long_name**: temporally averaged radar backscatter intensity in uncalibrated analog-to-digital converter units
- **units**: 1
```
array([[nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan]], dtype=float32)
```

##### vi.  `number_of_observations` (dims: y, x; dtype: int32; shape: 5×5)
- **long_name**: number of measurements from which the radar backscatter intensity averages have been derived
- **standard_name**: number_of_observations
- **units**: 1
```
array([[0, 0, 0, 0, 0],
       [0, 0, 0, 0, 0],
       [0, 0, 0, 0, 0],
       [0, 0, 0, 0, 0],
       [0, 0, 0, 0, 0]], dtype=int32)
```

##### vii.  `start_time_of_observations` (dims: y, x; dtype: float32; shape: 5×5)
- **long_name**: start time of the radar backscatter intensity averages in seconds after the global `time` attribute
- **units**: s
```
array([[nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan],
       [nan, nan, nan, nan, nan]], dtype=float32)
```

##### viii.  `x_utm` (dims: x; dtype: float64; shape: 5)
- **long_name**: easting along grid x-axis
- **standard_name**: projection_x_coordinate
- **units**: m
```
array([504029.7139848, 504037.2087963, 504044.7036078, 504052.1984193, 504059.6932308])
```

##### ix.  `y_utm` (dims: y; dtype: float64; shape: 5)
- **long_name**: northing along grid y-axis
- **standard_name**: projection_y_coordinate
- **units**: m
```
array([4165420.8882364 , 4165428.3830479 , 4165435.87785939, 4165443.37267089, 4165450.86748239])
```

##### x.  `x` (dims: x; dtype: float64; shape: 5)
- **long_name**: distance from radar along grid x-axis at measurement start time
- **standard_name**: projection_x_coordinate
- **units**: m
```
array([-5062.74516825, -5055.25035675, -5047.75554525, -5040.26073375, -5032.76592225])
```

##### xi.  `y` (dims: y; dtype: float64; shape: 5)
- **long_name**: distance from radar along grid y-axis at measurement start time
- **standard_name**: projection_y_coordinate
- **units**: m
```
array([-5092.72441425, -5085.22960275, -5077.73479125, -5070.23997975, -5062.74516825])
```
