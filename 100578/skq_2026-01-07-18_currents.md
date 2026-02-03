# NetCDF Data Format Description — Marine X-band Radar Near-surface Current Measurements
_Generated on 2026-01-13 16:00 UTC_

**File**: `skq_2026-01-07-18_currents.nc`

## Overview
- **Title**: Marine X-band radar near-surface current measurements with quality control flag from R/V Sikuliaq
- **Institution**: University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA
- **Conventions**: CF-1.11 SOMaR-0.2-draft
- *Coordinate System*: See variable `crs` and variable attribute `grid_mapping`
- *Compression & Encoding*: See per-variable encoding tables

## Dimensions
| Dimension | Size |
|---|---|
| `measurement` | 3851 |

## Variables
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
- **Dimensions**: measurement
- **Shape**: 3851
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

### Variable: `eastward_sea_water_velocity_standard_error`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | standard error of the eastward component of the near surface current velocity |
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
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `grid_mapping` | crs |
| `long_name` | center latitude of current measurement |
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
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `grid_mapping` | crs |
| `long_name` | center longitude of current measurement |
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

### Variable: `mean_wavenumber`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | mean wavenumber of the wave signal used by the current measurement |
| `units` | radian m-1 |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `measurement`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `int64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | measurement identifier |
| `units` | 1 |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | int64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `measurement_quality`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `uint8`

**Attributes**
| Attribute | Value |
|---|---|
| `flag_meanings` | good_quality measurement_failed standard_error_above_threshold current_fit_boundaries_reached number_of_spatial_neighbors_below_threshold difference_from_all_spatial_neighbors_exceeds_threshold number_of_temporal_neighbors_below_threshold difference_from_all_temporal_neighbors_exceeds_threshold |
| `flag_values` | [ 0  1  2  4  8 16 32 64] |
| `long_name` | measurement quality (0: good, 1-127: bad) |
| `standard_name` | quality_flag |
| `valid_range` | [  0 127] |

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
- **Dimensions**: measurement
- **Shape**: 3851
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

### Variable: `northward_sea_water_velocity_standard_error`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | standard error of the northward component of the near surface current velocity |
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

### Variable: `number_of_wave_coordinates`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `int64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | number of wave coordinates used by the current measurement |
| `units` | 1 |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | int64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `time`
- **Dimensions**: measurement
- **Shape**: 3851
- **Data type**: `datetime64[ns]`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | start time of current measurement |
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
| `long_name` | Current measurements along R/V Sikuliaq trajectory |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 0 |
| `contiguous` | True |
| `dtype` | |S1 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | False |

## Global Attributes
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

## Data Samples
### `trajectory`  (dims: _scalar_; dtype: |S1; shape: 1)
- **long_name**: Current measurements along R/V Sikuliaq trajectory
```
array(b'', dtype='|S1')
```

### `crs`  (dims: _scalar_; dtype: |S1; shape: 1)
```
array(b'', dtype='|S1')
```

### `time`  (dims: measurement; dtype: datetime64[ns]; shape: 5)
- **long_name**: start time of current measurement
- **standard_name**: time
```
array(['2026-01-07T18:04:00.536350000', '2026-01-07T18:04:00.536350000', '2026-01-07T18:04:00.536350000',
       '2026-01-07T18:04:00.536350000', '2026-01-07T18:04:00.536350000'], dtype='datetime64[ns]')
```

### `longitude`  (dims: measurement; dtype: float64; shape: 5)
- **long_name**: center longitude of current measurement
- **standard_name**: longitude
- **units**: degrees_east
```
array([-74.93952, -74.93952, -74.93216, -74.93216, -74.93216])
```

### `latitude`  (dims: measurement; dtype: float64; shape: 5)
- **long_name**: center latitude of current measurement
- **standard_name**: latitude
- **units**: degrees_north
```
array([-52.605 , -52.6005, -52.641 , -52.605 , -52.6005])
```

### `eastward_sea_water_velocity`  (dims: measurement; dtype: float64; shape: 5)
- **long_name**: eastward component of the near surface current velocity
- **standard_name**: eastward_sea_water_velocity
- **units**: m s-1
```
array([0.23847166, 0.36341958, 0.1256754 , 0.3084851 , 0.35695824])
```

### `northward_sea_water_velocity`  (dims: measurement; dtype: float64; shape: 5)
- **long_name**: northward component of the near surface current velocity
- **standard_name**: northward_sea_water_velocity
- **units**: m s-1
```
array([-0.10657389, -0.50005305, -0.57984689, -0.47703116, -0.46045258])
```

### `mean_wavenumber`  (dims: measurement; dtype: float64; shape: 5)
- **long_name**: mean wavenumber of the wave signal used by the current measurement
- **units**: radian m-1
```
array([0.08356992, 0.09857567, 0.10201743, 0.09838675, 0.10304121])
```

### `eastward_sea_water_velocity_standard_error`  (dims: measurement; dtype: float64; shape: 5)
- **long_name**: standard error of the eastward component of the near surface current velocity
- **units**: m s-1
```
array([0.01827055, 0.01364303, 0.01898912, 0.01070099, 0.01133022])
```

### `northward_sea_water_velocity_standard_error`  (dims: measurement; dtype: float64; shape: 5)
- **long_name**: standard error of the northward component of the near surface current velocity
- **units**: m s-1
```
array([0.04857037, 0.01314972, 0.01558771, 0.00968407, 0.0099141 ])
```

### `number_of_wave_coordinates`  (dims: measurement; dtype: int64; shape: 5)
- **long_name**: number of wave coordinates used by the current measurement
- **units**: 1
```
array([ 885, 1827, 2193, 2851, 2559])
```

### `measurement_quality`  (dims: measurement; dtype: uint8; shape: 5)
- **long_name**: measurement quality (0: good, 1-127: bad)
- **standard_name**: quality_flag
```
array([32, 32, 32, 32, 64], dtype=uint8)
```

### `measurement`  (dims: measurement; dtype: int64; shape: 5)
- **long_name**: measurement identifier
- **units**: 1
```
array([0, 1, 2, 3, 4])
```
