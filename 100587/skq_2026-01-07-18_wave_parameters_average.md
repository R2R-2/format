# NetCDF Data Format Description — Marine X-band Radar Mean and Peak Wave Parameters
_Generated on 2026-01-13 16:00 UTC_

**File**: `skq_2026-01-07-18_wave_parameters_average.nc`

## Overview
- **Title**: Marine X-band radar derived mean and peak wave parameters with quality control flag from R/V Sikuliaq
- **Institution**: University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA
- **Conventions**: CF-1.11 SOMaR-0.2-draft
- *Coordinate System*: See variable `crs` and variable attribute `grid_mapping`
- *Compression & Encoding*: See per-variable encoding tables

## Dimensions
| Dimension | Size |
|---|---|
| `time` | 30 |

## Variables
### Variable: `background_noise`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | radar image spectral density of the background noise |
| `units` | 1 |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `crs`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `|S1`

**Attributes**
| Attribute | Value |
|---|---|
| `authority_string` | EPSG:4326 |
| `grid_mapping_name` | latitude_longitude |
| `inverse_flattening` | 298.257223563 |
| `longitude_of_prime_meridian` | 0.0 |
| `semi_major_axis` | 6378137.0 |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 0 |
| `contiguous` | True |
| `dtype` | |S1 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | False |

### Variable: `eastward_sea_water_velocity`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | eastward component of the near surface current velocity |
| `standard_name` | eastward_sea_water_velocity |
| `units` | m s-1 |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `latitude`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `grid_mapping` | crs |
| `long_name` | mean latitude of wave measurement |
| `standard_name` | latitude |
| `units` | degrees_north |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `longitude`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `grid_mapping` | crs |
| `long_name` | mean longitude of wave measurement |
| `standard_name` | longitude |
| `units` | degrees_east |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `measurement_quality`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `uint8`

**Attributes**
| Attribute | Value |
|---|---|
| `flag_meanings` | good bad |
| `flag_values` | [0 1] |
| `long_name` | measurement quality (0: good, 1: bad) |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | uint8 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `northward_sea_water_velocity`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | northward component of the near surface current velocity |
| `standard_name` | northward_sea_water_velocity |
| `units` | m s-1 |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `sea_surface_wave_from_direction_at_variance_spectral_density_maximum`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | peak wave direction |
| `standard_name` | sea_surface_wave_from_direction_at_variance_spectral_density_maximum |
| `units` | degree |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `sea_surface_wave_mean_period`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | mean wave period |
| `standard_name` | sea_surface_wave_mean_period |
| `units` | s |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `sea_surface_wave_period_at_variance_spectral_density_maximum`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | peak wave period |
| `standard_name` | sea_surface_wave_period_at_variance_spectral_density_maximum |
| `units` | s |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `sea_surface_wave_significant_height`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | significant wave height |
| `standard_name` | sea_surface_wave_significant_height |
| `units` | m |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `time`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `datetime64[ns]`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | start time of wave measurement |
| `standard_name` | time |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `trajectory`
- **Dimensions**: _none_
- **Shape**: unknown
- **Data type**: `|S1`

**Attributes**
| Attribute | Value |
|---|---|
| `cf_role` | trajectory_id |
| `long_name` | Wave measurements along R/V Sikuliaq trajectory |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 0 |
| `contiguous` | True |
| `dtype` | |S1 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | False |

### Variable: `wave_signal`
- **Dimensions**: time
- **Shape**: 30
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | radar image spectral density of the wave signal |
| `units` | 1 |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

## Global Attributes
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

## Data Samples
### `trajectory`  (dims: _scalar_; dtype: |S1; shape: 1)
- **long_name**: Wave measurements along R/V Sikuliaq trajectory
```
array(b'', dtype='|S1')
```

### `crs`  (dims: _scalar_; dtype: |S1; shape: 1)
```
array(b'', dtype='|S1')
```

### `longitude`  (dims: time; dtype: float64; shape: 5)
- **long_name**: mean longitude of wave measurement
- **standard_name**: longitude
- **units**: degrees_east
```
array([-74.89251674, -74.882071  , -74.87182443, -74.8614894 , -74.85106588])
```

### `latitude`  (dims: time; dtype: float64; shape: 5)
- **long_name**: mean latitude of wave measurement
- **standard_name**: latitude
- **units**: degrees_north
```
array([-52.61376396, -52.6136562 , -52.61348108, -52.61327903, -52.61299615])
```

### `eastward_sea_water_velocity`  (dims: time; dtype: float64; shape: 5)
- **long_name**: eastward component of the near surface current velocity
- **standard_name**: eastward_sea_water_velocity
- **units**: m s-1
```
array([0.26394353, 0.25834831, 0.25588836, 0.26058882, 0.27283721])
```

### `northward_sea_water_velocity`  (dims: time; dtype: float64; shape: 5)
- **long_name**: northward component of the near surface current velocity
- **standard_name**: northward_sea_water_velocity
- **units**: m s-1
```
array([-0.44827676, -0.41988097, -0.38031087, -0.34391056, -0.30439423])
```

### `sea_surface_wave_significant_height`  (dims: time; dtype: float64; shape: 5)
- **long_name**: significant wave height
- **standard_name**: sea_surface_wave_significant_height
- **units**: m
```
array([2.60929935, 2.58246458, 2.56542608, 2.55145731, 2.56596099])
```

### `sea_surface_wave_from_direction_at_variance_spectral_density_maximum`  (dims: time; dtype: float64; shape: 5)
- **long_name**: peak wave direction
- **standard_name**: sea_surface_wave_from_direction_at_variance_spectral_density_maximum
- **units**: degree
```
array([230.35922241, 229.25021362, 229.58061218, 231.32714844, 229.78059387])
```

### `sea_surface_wave_period_at_variance_spectral_density_maximum`  (dims: time; dtype: float64; shape: 5)
- **long_name**: peak wave period
- **standard_name**: sea_surface_wave_period_at_variance_spectral_density_maximum
- **units**: s
```
array([10.02279308, 10.02279308, 10.02279308, 10.02279308,  9.95975665])
```

### `sea_surface_wave_mean_period`  (dims: time; dtype: float64; shape: 5)
- **long_name**: mean wave period
- **standard_name**: sea_surface_wave_mean_period
- **units**: s
```
array([8.77992546, 8.80971096, 8.80695244, 8.80584163, 8.86417441])
```

### `wave_signal`  (dims: time; dtype: float64; shape: 5)
- **long_name**: radar image spectral density of the wave signal
- **units**: 1
```
array([9.50795599e+14, 9.31353122e+14, 9.19070434e+14, 9.09146347e+14, 9.19458040e+14])
```

### `background_noise`  (dims: time; dtype: float64; shape: 5)
- **long_name**: radar image spectral density of the background noise
- **units**: 1
```
array([7.29015826e+11, 7.09629240e+11, 7.03167763e+11, 7.00263253e+11, 6.91799830e+11])
```

### `measurement_quality`  (dims: time; dtype: uint8; shape: 5)
- **long_name**: measurement quality (0: good, 1: bad)
```
array([0, 0, 0, 0, 0], dtype=uint8)
```

### `time`  (dims: time; dtype: datetime64[ns]; shape: 5)
- **long_name**: start time of wave measurement
- **standard_name**: time
```
array(['2026-01-07T18:00:00.224477000', '2026-01-07T18:02:01.017744000', '2026-01-07T18:04:00.536350000',
       '2026-01-07T18:06:00.047841000', '2026-01-07T18:08:00.862179000'], dtype='datetime64[ns]')
```
