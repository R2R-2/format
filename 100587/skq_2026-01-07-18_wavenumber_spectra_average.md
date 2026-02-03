# NetCDF Data Format Description — Marine X-band Radar Wave Energy Density Wavenumber Spectra
_Generated on 2026-01-13 16:00 UTC_

**File**: `skq_2026-01-07-18_wavenumber_spectra_average.nc`

## Overview
- **Title**: Marine X-band radar derived wave energy density 2D wavenumber spectra with quality control flag from R/V Sikuliaq
- **Institution**: University of Miami, Center for Southeastern Tropical Advanced Remote Sensing (CSTARS), Miami, FL, USA
- **Conventions**: CF-1.11 SOMaR-0.2-draft
- *Coordinate System*: See variable `crs` and variable attribute `grid_mapping`
- *Compression & Encoding*: See per-variable encoding tables

## Dimensions
| Dimension | Size |
|---|---|
| `time` | 30 |
| `northward_wave_wavenumber` | 512 |
| `eastward_wave_wavenumber` | 512 |

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

### Variable: `eastward_wave_wavenumber`
- **Dimensions**: eastward_wave_wavenumber
- **Shape**: 512
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | eastward component of the wave wavenumber |
| `units` | m-1 |

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

### Variable: `northward_wave_wavenumber`
- **Dimensions**: northward_wave_wavenumber
- **Shape**: 512
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | northward component of the wave wavenumber |
| `units` | m-1 |

**Encoding / Compression**
| Encoding Key | Value |
|---|---|
| `complevel` | 4 |
| `contiguous` | False |
| `dtype` | float64 |
| `fletcher32` | False |
| `szip` | False |
| `zlib` | True |

### Variable: `sea_surface_wave_variance_spectral_density`
- **Dimensions**: time, northward_wave_wavenumber, eastward_wave_wavenumber
- **Shape**: 30×512×512
- **Data type**: `float64`

**Attributes**
| Attribute | Value |
|---|---|
| `long_name` | wave energy density two dimensional wavenumber spectrum |
| `standard_name` | sea_surface_wave_variance_spectral_density |
| `units` | m3 |

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

## Global Attributes
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

### `sea_surface_wave_variance_spectral_density`  (dims: time, northward_wave_wavenumber, eastward_wave_wavenumber; dtype: float64; shape: 5×5×5)
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

### `eastward_wave_wavenumber`  (dims: eastward_wave_wavenumber; dtype: float64; shape: 5)
- **long_name**: eastward component of the wave wavenumber
- **units**: m-1
```
array([-0.06645222, -0.06619162, -0.06593103, -0.06567043, -0.06540983])
```

### `northward_wave_wavenumber`  (dims: northward_wave_wavenumber; dtype: float64; shape: 5)
- **long_name**: northward component of the wave wavenumber
- **units**: m-1
```
array([-0.06645222, -0.06619162, -0.06593103, -0.06567043, -0.06540983])
```
