# iTop-br-iot

Copyright (c) 2022-2024 Björn Rudner
[![License](https://img.shields.io/github/license/rudnerbjoern/iTop-br-landscape)](https://github.com/rudnerbjoern/iTop-br-landscape/blob/main/LICENSE)

## What?

iTop extension to add IoT CIs

## Classes

### Gateway

* Device Name - String
* Device ID - String
* Certificate Created - Bool Yes/No
* Certificate Expires - Date
* SIM-Number - String
* PIN - String
* PUK - String
* Device Test - Bool Yes/No
* Application - String
* Program version - String
* Firmware version - String
* Contact - lnkContact
* RA version - String
* VPND - Bool Yes/no
* List of Material - Attachment
* lnkSensors

### Sensor

* Sensor Name - String
* ID/Serial number - String
* Manufacturer - Tag-List
* Template - Attachment

### Link between Gateway and Sensor

* Collection Name - String
* Cable Name - String

### Customer

TBD

## iTop Compatibility

The extension was tested on iTop 2.7.11 and 3.1.1

## Attribution

<https://handbook.enapter.com/icons.html>
