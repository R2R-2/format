# NetCDF Data Format Description — Marine X-band Radar Wave Measurements
_Generated on 2026-06-18 18:30 UTC_

## Table of Contents

[1. File: `skq_2026-01-07-18_wave_parameters_average.nc`](#1-file-skq_2026-01-07-18_wave_parameters_averagenc)  
&nbsp;&nbsp;[A. Overview](#a-overview)  
&nbsp;&nbsp;[B. Dimensions](#b-dimensions)  
&nbsp;&nbsp;[C. Variables](#c-variables)  
&nbsp;&nbsp;&nbsp;&nbsp;[a. Variable: `background_noise`](#a-variable-background_noise)  
&nbsp;&nbsp;&nbsp;&nbsp;[b. Variable: `crs`](#b-variable-crs)  
&nbsp;&nbsp;&nbsp;&nbsp;[c. Variable: `eastward_sea_water_velocity`](#c-variable-eastward_sea_water_velocity)  
&nbsp;&nbsp;&nbsp;&nbsp;[d. Variable: `latitude`](#d-variable-latitude)  
&nbsp;&nbsp;&nbsp;&nbsp;[e. Variable: `longitude`](#e-variable-longitude)  
&nbsp;&nbsp;&nbsp;&nbsp;[f. Variable: `measurement_quality`](#f-variable-measurement_quality)  
&nbsp;&nbsp;&nbsp;&nbsp;[g. Variable: `northward_sea_water_velocity`](#g-variable-northward_sea_water_velocity)  
&nbsp;&nbsp;&nbsp;&nbsp;[h. Variable: `sea_surface_wave_from_direction_at_variance_spectral_density_maximum`](#h-variable-sea_surface_wave_from_direction_at_variance_spectral_density_maximum)  
&nbsp;&nbsp;&nbsp;&nbsp;[i. Variable: `sea_surface_wave_mean_period`](#i-variable-sea_surface_wave_mean_period)  
&nbsp;&nbsp;&nbsp;&nbsp;[j. Variable: `sea_surface_wave_period_at_variance_spectral_density_maximum`](#j-variable-sea_surface_wave_period_at_variance_spectral_density_maximum)  
&nbsp;&nbsp;&nbsp;&nbsp;[k. Variable: `sea_surface_wave_significant_height`](#k-variable-sea_surface_wave_significant_height)  
&nbsp;&nbsp;&nbsp;&nbsp;[l. Variable: `time`](#l-variable-time)  
&nbsp;&nbsp;&nbsp;&nbsp;[m. Variable: `trajectory`](#m-variable-trajectory)  
&nbsp;&nbsp;&nbsp;&nbsp;[n. Variable: `wave_signal`](#n-variable-wave_signal)  
&nbsp;&nbsp;[D. Global Attributes](#d-global-attributes)  
&nbsp;&nbsp;[E. Data Samples](#e-data-samples)  
&nbsp;&nbsp;&nbsp;&nbsp;[a.  `trajectory` (dims: _scalar_; dtype: |S1; shape: 1)](#a-trajectory-dims-_scalar_-dtype-s1-shape-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[b.  `crs` (dims: _scalar_; dtype: |S1; shape: 1)](#b-crs-dims-_scalar_-dtype-s1-shape-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[c.  `longitude` (dims: time; dtype: float64; shape: 5)](#c-longitude-dims-time-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[d.  `latitude` (dims: time; dtype: float64; shape: 5)](#d-latitude-dims-time-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[e.  `eastward_sea_water_velocity` (dims: time; dtype: float64; shape: 5)](#e-eastward_sea_water_velocity-dims-time-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[f.  `northward_sea_water_velocity` (dims: time; dtype: float64; shape: 5)](#f-northward_sea_water_velocity-dims-time-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[g.  `sea_surface_wave_significant_height` (dims: time; dtype: float64; shape: 5)](#g-sea_surface_wave_significant_height-dims-time-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[h.  `sea_surface_wave_from_direction_at_variance_spectral_density_maximum` (dims: time; dtype: float64; shape: 5)](#h-sea_surface_wave_from_direction_at_variance_spectral_density_maximum-dims-time-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[i.  `sea_surface_wave_period_at_variance_spectral_density_maximum` (dims: time; dtype: float64; shape: 5)](#i-sea_surface_wave_period_at_variance_spectral_density_maximum-dims-time-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[j.  `sea_surface_wave_mean_period` (dims: time; dtype: float64; shape: 5)](#j-sea_surface_wave_mean_period-dims-time-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[k.  `wave_signal` (dims: time; dtype: float64; shape: 5)](#k-wave_signal-dims-time-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[l.  `background_noise` (dims: time; dtype: float64; shape: 5)](#l-background_noise-dims-time-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[m.  `measurement_quality` (dims: time; dtype: uint8; shape: 5)](#m-measurement_quality-dims-time-dtype-uint8-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[n.  `time` (dims: time; dtype: float64; shape: 5)](#n-time-dims-time-dtype-float64-shape-5)  
[2. File: `skq_2026-01-07-18_wave_spectrograms_average.nc`](#2-file-skq_2026-01-07-18_wave_spectrograms_averagenc)  
&nbsp;&nbsp;[A. Overview](#a-overview-1)  
&nbsp;&nbsp;[B. Dimensions](#b-dimensions-1)  
&nbsp;&nbsp;[C. Variables](#c-variables-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[a. Variable: `crs`](#a-variable-crs)  
&nbsp;&nbsp;&nbsp;&nbsp;[b. Variable: `latitude`](#b-variable-latitude)  
&nbsp;&nbsp;&nbsp;&nbsp;[c. Variable: `longitude`](#c-variable-longitude)  
&nbsp;&nbsp;&nbsp;&nbsp;[d. Variable: `measurement_quality`](#d-variable-measurement_quality)  
&nbsp;&nbsp;&nbsp;&nbsp;[e. Variable: `sea_surface_wave_directional_spread`](#e-variable-sea_surface_wave_directional_spread)  
&nbsp;&nbsp;&nbsp;&nbsp;[f. Variable: `sea_surface_wave_mean_from_direction`](#f-variable-sea_surface_wave_mean_from_direction)  
&nbsp;&nbsp;&nbsp;&nbsp;[g. Variable: `sea_surface_wave_variance_spectral_density`](#g-variable-sea_surface_wave_variance_spectral_density)  
&nbsp;&nbsp;&nbsp;&nbsp;[h. Variable: `time`](#h-variable-time)  
&nbsp;&nbsp;&nbsp;&nbsp;[i. Variable: `trajectory`](#i-variable-trajectory)  
&nbsp;&nbsp;&nbsp;&nbsp;[j. Variable: `wave_frequency`](#j-variable-wave_frequency)  
&nbsp;&nbsp;[D. Global Attributes](#d-global-attributes-1)  
&nbsp;&nbsp;[E. Data Samples](#e-data-samples-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[a.  `trajectory` (dims: _scalar_; dtype: |S1; shape: 1)](#a-trajectory-dims-_scalar_-dtype-s1-shape-1-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[b.  `crs` (dims: _scalar_; dtype: |S1; shape: 1)](#b-crs-dims-_scalar_-dtype-s1-shape-1-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[c.  `longitude` (dims: time; dtype: float64; shape: 5)](#c-longitude-dims-time-dtype-float64-shape-5-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[d.  `latitude` (dims: time; dtype: float64; shape: 5)](#d-latitude-dims-time-dtype-float64-shape-5-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[e.  `sea_surface_wave_variance_spectral_density` (dims: time, wave_frequency; dtype: float32; shape: 5×5)](#e-sea_surface_wave_variance_spectral_density-dims-time-wave_frequency-dtype-float32-shape-55)  
&nbsp;&nbsp;&nbsp;&nbsp;[f.  `sea_surface_wave_directional_spread` (dims: time, wave_frequency; dtype: float32; shape: 5×5)](#f-sea_surface_wave_directional_spread-dims-time-wave_frequency-dtype-float32-shape-55)  
&nbsp;&nbsp;&nbsp;&nbsp;[g.  `sea_surface_wave_mean_from_direction` (dims: time, wave_frequency; dtype: float32; shape: 5×5)](#g-sea_surface_wave_mean_from_direction-dims-time-wave_frequency-dtype-float32-shape-55)  
&nbsp;&nbsp;&nbsp;&nbsp;[h.  `measurement_quality` (dims: time; dtype: uint8; shape: 5)](#h-measurement_quality-dims-time-dtype-uint8-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[i.  `time` (dims: time; dtype: float64; shape: 5)](#i-time-dims-time-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[j.  `wave_frequency` (dims: wave_frequency; dtype: float64; shape: 5)](#j-wave_frequency-dims-wave_frequency-dtype-float64-shape-5)  
[3. File: `skq_2026-01-07-18_wavenumber_spectra_average.nc`](#3-file-skq_2026-01-07-18_wavenumber_spectra_averagenc)  
&nbsp;&nbsp;[A. Overview](#a-overview-2)  
&nbsp;&nbsp;[B. Dimensions](#b-dimensions-2)  
&nbsp;&nbsp;[C. Variables](#c-variables-2)  
&nbsp;&nbsp;&nbsp;&nbsp;[a. Variable: `crs`](#a-variable-crs-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[b. Variable: `eastward_wave_wavenumber`](#b-variable-eastward_wave_wavenumber)  
&nbsp;&nbsp;&nbsp;&nbsp;[c. Variable: `latitude`](#c-variable-latitude)  
&nbsp;&nbsp;&nbsp;&nbsp;[d. Variable: `longitude`](#d-variable-longitude)  
&nbsp;&nbsp;&nbsp;&nbsp;[e. Variable: `measurement_quality`](#e-variable-measurement_quality)  
&nbsp;&nbsp;&nbsp;&nbsp;[f. Variable: `northward_wave_wavenumber`](#f-variable-northward_wave_wavenumber)  
&nbsp;&nbsp;&nbsp;&nbsp;[g. Variable: `sea_surface_wave_variance_spectral_density`](#g-variable-sea_surface_wave_variance_spectral_density-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[h. Variable: `time`](#h-variable-time-1)  
&nbsp;&nbsp;&nbsp;&nbsp;[i. Variable: `trajectory`](#i-variable-trajectory-1)  
&nbsp;&nbsp;[D. Global Attributes](#d-global-attributes-2)  
&nbsp;&nbsp;[E. Data Samples](#e-data-samples-2)  
&nbsp;&nbsp;&nbsp;&nbsp;[a.  `trajectory` (dims: _scalar_; dtype: |S1; shape: 1)](#a-trajectory-dims-_scalar_-dtype-s1-shape-1-2)  
&nbsp;&nbsp;&nbsp;&nbsp;[b.  `crs` (dims: _scalar_; dtype: |S1; shape: 1)](#b-crs-dims-_scalar_-dtype-s1-shape-1-2)  
&nbsp;&nbsp;&nbsp;&nbsp;[c.  `longitude` (dims: time; dtype: float64; shape: 5)](#c-longitude-dims-time-dtype-float64-shape-5-2)  
&nbsp;&nbsp;&nbsp;&nbsp;[d.  `latitude` (dims: time; dtype: float64; shape: 5)](#d-latitude-dims-time-dtype-float64-shape-5-2)  
&nbsp;&nbsp;&nbsp;&nbsp;[e.  `sea_surface_wave_variance_spectral_density` (dims: time, northward_wave_wavenumber, eastward_wave_wavenumber; dtype: float64; shape: 5×5×5)](#e-sea_surface_wave_variance_spectral_density-dims-time-northward_wave_wavenumber-eastward_wave_wavenumber-dtype-float64-shape-555)  
&nbsp;&nbsp;&nbsp;&nbsp;[f.  `measurement_quality` (dims: time; dtype: uint8; shape: 5)](#f-measurement_quality-dims-time-dtype-uint8-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[g.  `time` (dims: time; dtype: float64; shape: 5)](#g-time-dims-time-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[h.  `eastward_wave_wavenumber` (dims: eastward_wave_wavenumber; dtype: float64; shape: 5)](#h-eastward_wave_wavenumber-dims-eastward_wave_wavenumber-dtype-float64-shape-5)  
&nbsp;&nbsp;&nbsp;&nbsp;[i.  `northward_wave_wavenumber` (dims: northward_wave_wavenumber; dtype: float64; shape: 5)](#i-northward_wave_wavenumber-dims-northward_wave_wavenumber-dtype-float64-shape-5)  

---

## 1. File: `skq_2026-01-07-18_wave_parameters_average.nc`

### A. Overview
- **Title**: Marine X-band radar derived mean and peak wave parameters with quality control flag from R/V Sikuliaq
- **Institution**: University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA
- **Conventions**: CF-1.11 SOMaR-0.2-draft
- *Coordinate System*: See variable `crs` and variable attribute `grid_mapping`
- *Compression & Encoding*: See per-variable compression specifications

### B. Dimensions
| Dimension | Size |
|---|---|
| `time` | 30 |

### C. Variables
#### a. Variable: `background_noise`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | radar image spectral density of the background noise |
| `units` | 1 |


#### b. Variable: `crs`
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


#### c. Variable: `eastward_sea_water_velocity`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | eastward component of the near surface current velocity |
| `standard_name` | eastward_sea_water_velocity |
| `units` | m s-1 |


#### d. Variable: `latitude`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `grid_mapping` | crs |
| `long_name` | mean latitude of wave measurement |
| `standard_name` | latitude |
| `units` | degrees_north |


#### e. Variable: `longitude`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `grid_mapping` | crs |
| `long_name` | mean longitude of wave measurement |
| `standard_name` | longitude |
| `units` | degrees_east |


#### f. Variable: `measurement_quality`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `uint8`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `flag_meanings` | good bad |
| `flag_values` | [0 1] |
| `long_name` | measurement quality (0: good, 1: bad) |


#### g. Variable: `northward_sea_water_velocity`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | northward component of the near surface current velocity |
| `standard_name` | northward_sea_water_velocity |
| `units` | m s-1 |


#### h. Variable: `sea_surface_wave_from_direction_at_variance_spectral_density_maximum`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | peak wave direction |
| `standard_name` | sea_surface_wave_from_direction_at_variance_spectral_density_maximum |
| `units` | degree |


#### i. Variable: `sea_surface_wave_mean_period`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | mean wave period |
| `standard_name` | sea_surface_wave_mean_period |
| `units` | s |


#### j. Variable: `sea_surface_wave_period_at_variance_spectral_density_maximum`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | peak wave period |
| `standard_name` | sea_surface_wave_period_at_variance_spectral_density_maximum |
| `units` | s |


#### k. Variable: `sea_surface_wave_significant_height`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | significant wave height |
| `standard_name` | sea_surface_wave_significant_height |
| `units` | m |


#### l. Variable: `time`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `calendar` | standard |
| `long_name` | start time of wave measurement |
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
| `long_name` | Wave measurements along R/V Sikuliaq trajectory |


#### n. Variable: `wave_signal`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | radar image spectral density of the wave signal |
| `units` | 1 |

### D. Global Attributes
| Attribute | Value |
|---|---|
| `Conventions` | CF-1.11 SOMaR-0.2-draft |
| `comment` | The wave retrieval is based on 3.0 min long marine X-band radar image sequences that are partitioned into 5 of 512 by 512 pixel where all pixels outside of the circles that are inscribed in the analysis windows are set to zero. The analysis windows are spread across the radar field of view at angles of -55.0, -10.0, 35.0, 80.0, 125.0 degree. They are geostationary and placed at a range with maximum data coverage. The radar image sequences within each analysis window are transformed to wavenumber frequency space, dispersion filtered, integrated over frequency, multiplied with an empirical modulation transfer function, and rescaled using radar specific calibration parameters to obtain a two dimensional wavenumber wave energy density spectra. Here, the mean and peak wave parameters are derived from the mean two dimensional wavenumber wave energy density spectrum. |
| `contact` | blund@cstars.miami.edu |
| `featureType` | trajectory |
| `geospatial_lat_max` | -52.6117703517947 |
| `geospatial_lat_min` | -52.656626325788544 |
| `geospatial_lon_max` | -74.61160868220126 |
| `geospatial_lon_min` | -74.89251673574734 |
| `history` | 2026-01-07T19:45:18Z: File creation time |
| `institution` | University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA |
| `institution_id` | https://ror.org/02dgjyy92 |
| `instrument` | Sperry Marine VisionMaster noncoherent marine X-band radar with Rutter sigma S6 WaMoS II analog to digital converter |
| `licence` | Creative Commons Attribution 4.0 International Public License (CC BY 4.0) |
| `originator` | Bjoern Lund |
| `platform` | R/V Sikuliaq |
| `processing_software` | CSTARS X-band radar processing software version 2.4.0 written in Python 3.13.6 |
| `sea_surface_wave_significant_height_calibration_status` | Calibrated on 2025/09/26 using MFWAM global wave model data from 2025-07-29 21:00:00 -> 2025-09-05 03:00:00 as reference, considering only model data from times when the ship had a minimum distance of 50 km from the GSHHS coastline |
| `source` | Shipboard marine X-band radar |
| `time_coverage_end` | 2026-01-07T18:58:01Z |
| `time_coverage_start` | 2026-01-07T18:00:00Z |
| `title` | Marine X-band radar derived mean and peak wave parameters with quality control flag from R/V Sikuliaq |


### E. Data Samples
#### a.  `trajectory` (dims: _scalar_; dtype: |S1; shape: 1)
- **long_name**: Wave measurements along R/V Sikuliaq trajectory
```
array(b'', dtype='|S1')
```

#### b.  `crs` (dims: _scalar_; dtype: |S1; shape: 1)
```
array(b'', dtype='|S1')
```

#### c.  `longitude` (dims: time; dtype: float64; shape: 5)
- **long_name**: mean longitude of wave measurement
- **standard_name**: longitude
- **units**: degrees_east
```
array([-74.89251674, -74.882071  , -74.87182443, -74.8614894 , -74.85106588])
```

#### d.  `latitude` (dims: time; dtype: float64; shape: 5)
- **long_name**: mean latitude of wave measurement
- **standard_name**: latitude
- **units**: degrees_north
```
array([-52.61376396, -52.6136562 , -52.61348108, -52.61327903, -52.61299615])
```

#### e.  `eastward_sea_water_velocity` (dims: time; dtype: float64; shape: 5)
- **long_name**: eastward component of the near surface current velocity
- **standard_name**: eastward_sea_water_velocity
- **units**: m s-1
```
array([0.26394353, 0.25834831, 0.25588836, 0.26058882, 0.27283721])
```

#### f.  `northward_sea_water_velocity` (dims: time; dtype: float64; shape: 5)
- **long_name**: northward component of the near surface current velocity
- **standard_name**: northward_sea_water_velocity
- **units**: m s-1
```
array([-0.44827676, -0.41988097, -0.38031087, -0.34391056, -0.30439423])
```

#### g.  `sea_surface_wave_significant_height` (dims: time; dtype: float64; shape: 5)
- **long_name**: significant wave height
- **standard_name**: sea_surface_wave_significant_height
- **units**: m
```
array([2.60929935, 2.58246458, 2.56542608, 2.55145731, 2.56596099])
```

#### h.  `sea_surface_wave_from_direction_at_variance_spectral_density_maximum` (dims: time; dtype: float64; shape: 5)
- **long_name**: peak wave direction
- **standard_name**: sea_surface_wave_from_direction_at_variance_spectral_density_maximum
- **units**: degree
```
array([230.35922241, 229.25021362, 229.58061218, 231.32714844, 229.78059387])
```

#### i.  `sea_surface_wave_period_at_variance_spectral_density_maximum` (dims: time; dtype: float64; shape: 5)
- **long_name**: peak wave period
- **standard_name**: sea_surface_wave_period_at_variance_spectral_density_maximum
- **units**: s
```
array([10.02279308, 10.02279308, 10.02279308, 10.02279308,  9.95975665])
```

#### j.  `sea_surface_wave_mean_period` (dims: time; dtype: float64; shape: 5)
- **long_name**: mean wave period
- **standard_name**: sea_surface_wave_mean_period
- **units**: s
```
array([8.77992546, 8.80971096, 8.80695244, 8.80584163, 8.86417441])
```

#### k.  `wave_signal` (dims: time; dtype: float64; shape: 5)
- **long_name**: radar image spectral density of the wave signal
- **units**: 1
```
array([9.50795599e+14, 9.31353122e+14, 9.19070434e+14, 9.09146347e+14, 9.19458040e+14])
```

#### l.  `background_noise` (dims: time; dtype: float64; shape: 5)
- **long_name**: radar image spectral density of the background noise
- **units**: 1
```
array([7.29015826e+11, 7.09629240e+11, 7.03167763e+11, 7.00263253e+11, 6.91799830e+11])
```

#### m.  `measurement_quality` (dims: time; dtype: uint8; shape: 5)
- **long_name**: measurement quality (0: good, 1: bad)
```
array([0, 0, 0, 0, 0], dtype=uint8)
```

#### n.  `time` (dims: time; dtype: float64; shape: 5)
- **long_name**: start time of wave measurement
- **standard_name**: time
- **units**: days since 2026-01-01T00:00:00Z
```
array([6.7500026 , 6.75140067, 6.75278399, 6.75416722, 6.75556553])
```

---

## 2. File: `skq_2026-01-07-18_wave_spectrograms_average.nc`

### A. Overview
- **Title**: Marine X-band radar derived wave energy density frequency spectra, directional spread, and mean direction with quality control flag from R/V Sikuliaq
- **Institution**: University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA
- **Conventions**: CF-1.11 SOMaR-0.2-draft
- *Coordinate System*: See variable `crs` and variable attribute `grid_mapping`
- *Compression & Encoding*: See per-variable compression specifications

### B. Dimensions
| Dimension | Size |
|---|---|
| `time` | 30 |
| `wave_frequency` | 512 |

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


#### b. Variable: `latitude`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `grid_mapping` | crs |
| `long_name` | mean latitude of wave measurement |
| `standard_name` | latitude |
| `units` | degrees_north |


#### c. Variable: `longitude`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `grid_mapping` | crs |
| `long_name` | mean longitude of wave measurement |
| `standard_name` | longitude |
| `units` | degrees_east |


#### d. Variable: `measurement_quality`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `uint8`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `flag_meanings` | good bad |
| `flag_values` | [0 1] |
| `long_name` | measurement quality (0: good, 1: bad) |


#### e. Variable: `sea_surface_wave_directional_spread`
- **Dimensions**: time, wave_frequency
- **Shape**: 30×512
- **Data type**: `float32`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | wave directional spread in each frequency band |
| `standard_name` | sea_surface_wave_directional_spread |
| `units` | degree |


#### f. Variable: `sea_surface_wave_mean_from_direction`
- **Dimensions**: time, wave_frequency
- **Shape**: 30×512
- **Data type**: `float32`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | mean wave direction in each frequency band |
| `standard_name` | sea_surface_wave_mean_from_direction |
| `units` | degree |


#### g. Variable: `sea_surface_wave_variance_spectral_density`
- **Dimensions**: time, wave_frequency
- **Shape**: 30×512
- **Data type**: `float32`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | wave energy density frequency spectrum |
| `standard_name` | sea_surface_wave_variance_spectral_density |
| `units` | m2 s |


#### h. Variable: `time`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `calendar` | standard |
| `long_name` | start time of wave measurement |
| `standard_name` | time |
| `units` | days since 2026-01-01T00:00:00Z |


#### i. Variable: `trajectory`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `|S1`
- **Compression**: None

| Attribute | Value |
|---|---|
| `cf_role` | trajectory_id |
| `long_name` | Wave measurements along R/V Sikuliaq trajectory |


#### j. Variable: `wave_frequency`
- **Dimensions**: wave_frequency
- **Shape**: 512
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | wave frequency |
| `standard_name` | wave_frequency |
| `units` | s-1 |

### D. Global Attributes
| Attribute | Value |
|---|---|
| `Conventions` | CF-1.11 SOMaR-0.2-draft |
| `comment` | The wave retrieval is based on 3.0 min long marine X-band radar image sequences that are partitioned into 5 of 512 by 512 pixel where all pixels outside of the circles that are inscribed in the analysis windows are set to zero. The analysis windows are spread across the radar field of view at angles of -55.0, -10.0, 35.0, 80.0, 125.0 degree. They are geostationary and placed at a range with maximum data coverage. The radar image sequences within each analysis window are transformed to wavenumber frequency space, dispersion filtered, integrated over frequency, multiplied with an empirical modulation transfer function, and rescaled using radar specific calibration parameters to obtain a two dimensional wavenumber wave energy density spectrum. Here, the wave energy spectral density, directional spread, and mean direction as function of frequency data are derived from the mean two dimensional wavenumber wave energy density spectrum. |
| `contact` | blund@cstars.miami.edu |
| `featureType` | trajectory |
| `geospatial_lat_max` | -52.6117703517947 |
| `geospatial_lat_min` | -52.656626325788544 |
| `geospatial_lon_max` | -74.61160868220126 |
| `geospatial_lon_min` | -74.89251673574734 |
| `history` | 2026-01-07T19:45:18Z: File creation time |
| `institution` | University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA |
| `institution_id` | https://ror.org/02dgjyy92 |
| `instrument` | Sperry Marine VisionMaster noncoherent marine X-band radar with Rutter sigma S6 WaMoS II analog to digital converter |
| `licence` | Creative Commons Attribution 4.0 International Public License (CC BY 4.0) |
| `originator` | Bjoern Lund |
| `platform` | R/V Sikuliaq |
| `processing_software` | CSTARS X-band radar processing software version 2.4.0 written in Python 3.13.6 |
| `sea_surface_wave_significant_height_calibration_status` | Calibrated on 2025/09/26 using MFWAM global wave model data from 2025-07-29 21:00:00 -> 2025-09-05 03:00:00 as reference, considering only model data from times when the ship had a minimum distance of 50 km from the GSHHS coastline |
| `source` | Shipboard marine X-band radar |
| `time_coverage_end` | 2026-01-07T18:58:01Z |
| `time_coverage_start` | 2026-01-07T18:00:00Z |
| `title` | Marine X-band radar derived wave energy density frequency spectra, directional spread, and mean direction with quality control flag from R/V Sikuliaq |


### E. Data Samples
#### a.  `trajectory` (dims: _scalar_; dtype: |S1; shape: 1)
- **long_name**: Wave measurements along R/V Sikuliaq trajectory
```
array(b'', dtype='|S1')
```

#### b.  `crs` (dims: _scalar_; dtype: |S1; shape: 1)
```
array(b'', dtype='|S1')
```

#### c.  `longitude` (dims: time; dtype: float64; shape: 5)
- **long_name**: mean longitude of wave measurement
- **standard_name**: longitude
- **units**: degrees_east
```
array([-74.89251674, -74.882071  , -74.87182443, -74.8614894 , -74.85106588])
```

#### d.  `latitude` (dims: time; dtype: float64; shape: 5)
- **long_name**: mean latitude of wave measurement
- **standard_name**: latitude
- **units**: degrees_north
```
array([-52.61376396, -52.6136562 , -52.61348108, -52.61327903, -52.61299615])
```

#### e.  `sea_surface_wave_variance_spectral_density` (dims: time, wave_frequency; dtype: float32; shape: 5×5)
- **long_name**: wave energy density frequency spectrum
- **standard_name**: sea_surface_wave_variance_spectral_density
- **units**: m2 s
```
array([[0., 0., 0., 0., 0.],
       [0., 0., 0., 0., 0.],
       [0., 0., 0., 0., 0.],
       [0., 0., 0., 0., 0.],
       [0., 0., 0., 0., 0.]], dtype=float32)
```

#### f.  `sea_surface_wave_directional_spread` (dims: time, wave_frequency; dtype: float32; shape: 5×5)
- **long_name**: wave directional spread in each frequency band
- **standard_name**: sea_surface_wave_directional_spread
- **units**: degree
```
array([[81.028465, 81.028465, 81.028465, 81.028465, 81.028465],
       [81.028465, 81.028465, 81.028465, 81.028465, 81.028465],
       [81.028465, 81.028465, 81.028465, 81.028465, 81.028465],
       [81.028465, 81.028465, 81.028465, 81.028465, 81.028465],
       [81.028465, 81.028465, 81.028465, 81.028465, 81.028465]], dtype=float32)
```

#### g.  `sea_surface_wave_mean_from_direction` (dims: time, wave_frequency; dtype: float32; shape: 5×5)
- **long_name**: mean wave direction in each frequency band
- **standard_name**: sea_surface_wave_mean_from_direction
- **units**: degree
```
array([[0., 0., 0., 0., 0.],
       [0., 0., 0., 0., 0.],
       [0., 0., 0., 0., 0.],
       [0., 0., 0., 0., 0.],
       [0., 0., 0., 0., 0.]], dtype=float32)
```

#### h.  `measurement_quality` (dims: time; dtype: uint8; shape: 5)
- **long_name**: measurement quality (0: good, 1: bad)
```
array([0, 0, 0, 0, 0], dtype=uint8)
```

#### i.  `time` (dims: time; dtype: float64; shape: 5)
- **long_name**: start time of wave measurement
- **standard_name**: time
- **units**: days since 2026-01-01T00:00:00Z
```
array([6.7500026 , 6.75140067, 6.75278399, 6.75416722, 6.75556553])
```

#### j.  `wave_frequency` (dims: wave_frequency; dtype: float64; shape: 5)
- **long_name**: wave frequency
- **standard_name**: wave_frequency
- **units**: s-1
```
array([0.        , 0.00063147, 0.00126294, 0.00189442, 0.00252589])
```

---

## 3. File: `skq_2026-01-07-18_wavenumber_spectra_average.nc`

### A. Overview
- **Title**: Marine X-band radar derived wave energy density 2D wavenumber spectra with quality control flag from R/V Sikuliaq
- **Institution**: University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA
- **Conventions**: CF-1.11 SOMaR-0.2-draft
- *Coordinate System*: See variable `crs` and variable attribute `grid_mapping`
- *Compression & Encoding*: See per-variable compression specifications

### B. Dimensions
| Dimension | Size |
|---|---|
| `time` | 30 |
| `northward_wave_wavenumber` | 512 |
| `eastward_wave_wavenumber` | 512 |

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


#### b. Variable: `eastward_wave_wavenumber`
- **Dimensions**: eastward_wave_wavenumber
- **Shape**: 512
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | eastward component of the wave wavenumber |
| `units` | m-1 |


#### c. Variable: `latitude`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `grid_mapping` | crs |
| `long_name` | mean latitude of wave measurement |
| `standard_name` | latitude |
| `units` | degrees_north |


#### d. Variable: `longitude`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `grid_mapping` | crs |
| `long_name` | mean longitude of wave measurement |
| `standard_name` | longitude |
| `units` | degrees_east |


#### e. Variable: `measurement_quality`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `uint8`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `flag_meanings` | good bad |
| `flag_values` | [0 1] |
| `long_name` | measurement quality (0: good, 1: bad) |


#### f. Variable: `northward_wave_wavenumber`
- **Dimensions**: northward_wave_wavenumber
- **Shape**: 512
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | northward component of the wave wavenumber |
| `units` | m-1 |


#### g. Variable: `sea_surface_wave_variance_spectral_density`
- **Dimensions**: time, northward_wave_wavenumber, eastward_wave_wavenumber
- **Shape**: 30×512×512
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `long_name` | wave energy density two dimensional wavenumber spectrum |
| `standard_name` | sea_surface_wave_variance_spectral_density |
| `units` | m3 |


#### h. Variable: `time`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`
- **Compression**: zlib (Level 4)

| Attribute | Value |
|---|---|
| `calendar` | standard |
| `long_name` | start time of wave measurement |
| `standard_name` | time |
| `units` | days since 2026-01-01T00:00:00Z |


#### i. Variable: `trajectory`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `|S1`
- **Compression**: None

| Attribute | Value |
|---|---|
| `cf_role` | trajectory_id |
| `long_name` | Wave measurements along R/V Sikuliaq trajectory |

### D. Global Attributes
| Attribute | Value |
|---|---|
| `Conventions` | CF-1.11 SOMaR-0.2-draft |
| `comment` | The wave retrieval is based on 3.0 min long marine X-band radar image sequences that are partitioned into 5 of 512 by 512 pixel where all pixels outside of the circles that are inscribed in the analysis windows are set to zero. The analysis windows are spread across the radar field of view at angles of -55.0, -10.0, 35.0, 80.0, 125.0 degree. They are geostationary and placed at a range with maximum data coverage. The radar image sequences within each analysis window are transformed to wavenumber frequency space, dispersion filtered, integrated over frequency, multiplied with an empirical modulation transfer function, and rescaled using radar specific calibration parameters to obtain a two dimensional wavenumber wave energy density spectrum. Here, the mean two dimensional wavenumber wave energy density spectra are given. The wavenumber vectors point in the direction from which the waves are propagating. |
| `contact` | blund@cstars.miami.edu |
| `featureType` | trajectory |
| `geospatial_lat_max` | -52.6117703517947 |
| `geospatial_lat_min` | -52.656626325788544 |
| `geospatial_lon_max` | -74.61160868220126 |
| `geospatial_lon_min` | -74.89251673574734 |
| `history` | 2026-01-07T19:45:24Z: File creation time |
| `institution` | University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA |
| `institution_id` | https://ror.org/02dgjyy92 |
| `instrument` | Sperry Marine VisionMaster noncoherent marine X-band radar with Rutter sigma S6 WaMoS II analog to digital converter |
| `licence` | Creative Commons Attribution 4.0 International Public License (CC BY 4.0) |
| `originator` | Bjoern Lund |
| `platform` | R/V Sikuliaq |
| `processing_software` | CSTARS X-band radar processing software version 2.4.0 written in Python 3.13.6 |
| `sea_surface_wave_significant_height_calibration_status` | Calibrated on 2025/09/26 using MFWAM global wave model data from 2025-07-29 21:00:00 -> 2025-09-05 03:00:00 as reference, considering only model data from times when the ship had a minimum distance of 50 km from the GSHHS coastline |
| `source` | Shipboard marine X-band radar |
| `time_coverage_end` | 2026-01-07T18:58:01Z |
| `time_coverage_start` | 2026-01-07T18:00:00Z |
| `title` | Marine X-band radar derived wave energy density 2D wavenumber spectra with quality control flag from R/V Sikuliaq |


### E. Data Samples
#### a.  `trajectory` (dims: _scalar_; dtype: |S1; shape: 1)
- **long_name**: Wave measurements along R/V Sikuliaq trajectory
```
array(b'', dtype='|S1')
```

#### b.  `crs` (dims: _scalar_; dtype: |S1; shape: 1)
```
array(b'', dtype='|S1')
```

#### c.  `longitude` (dims: time; dtype: float64; shape: 5)
- **long_name**: mean longitude of wave measurement
- **standard_name**: longitude
- **units**: degrees_east
```
array([-74.89251674, -74.882071  , -74.87182443, -74.8614894 , -74.85106588])
```

#### d.  `latitude` (dims: time; dtype: float64; shape: 5)
- **long_name**: mean latitude of wave measurement
- **standard_name**: latitude
- **units**: degrees_north
```
array([-52.61376396, -52.6136562 , -52.61348108, -52.61327903, -52.61299615])
```

#### e.  `sea_surface_wave_variance_spectral_density` (dims: time, northward_wave_wavenumber, eastward_wave_wavenumber; dtype: float64; shape: 5×5×5)
- **long_name**: wave energy density two dimensional wavenumber spectrum
- **standard_name**: sea_surface_wave_variance_spectral_density
- **units**: m3
```
array([[[0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.]],

       [[0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.]],

       [[0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.]],

       [[0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.]],

       [[0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.],
        [0., 0., 0., 0., 0.]]])
```

#### f.  `measurement_quality` (dims: time; dtype: uint8; shape: 5)
- **long_name**: measurement quality (0: good, 1: bad)
```
array([0, 0, 0, 0, 0], dtype=uint8)
```

#### g.  `time` (dims: time; dtype: float64; shape: 5)
- **long_name**: start time of wave measurement
- **standard_name**: time
- **units**: days since 2026-01-01T00:00:00Z
```
array([6.7500026 , 6.75140067, 6.75278399, 6.75416722, 6.75556553])
```

#### h.  `eastward_wave_wavenumber` (dims: eastward_wave_wavenumber; dtype: float64; shape: 5)
- **long_name**: eastward component of the wave wavenumber
- **units**: m-1
```
array([-0.06645222, -0.06619162, -0.06593103, -0.06567043, -0.06540983])
```

#### i.  `northward_wave_wavenumber` (dims: northward_wave_wavenumber; dtype: float64; shape: 5)
- **long_name**: northward component of the wave wavenumber
- **units**: m-1
```
array([-0.06645222, -0.06619162, -0.06593103, -0.06567043, -0.06540983])
```
