<?php

/**
 * @copyright   Copyright (C) 2021 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2022-03-07
 *
 * Localized data
 */

Dict::Add('EN US', 'English', 'English', array(
    'Class:Model/Attribute:type/Value:IOTGateway' => 'IoT Gateway',
    'Class:Model/Attribute:type/Value:IOTGateway+' => '',
    'Class:Model/Attribute:type/Value:IOTSensor' => 'IoT Sensor',
    'Class:Model/Attribute:type/Value:IOTSensor+' => '',
    'Menu:ConfigManagement:IoT' => 'IoT Devices',
    'Menu:ConfigManagement:IoT+' => 'Internet of Things',
    'Menu:ConfigManagement:IoTTypology' => 'IoT Typology Configuration',
    'Menu:IOTSpace' => 'IoT Management',
    'Menu:IOTSpace:Devices' => 'IoT Devices',
    'Menu:IOTSpace:Options' => 'IoT Configuration',
    'IOTGateway:Certificate' => 'Certificate',
    'IOTGateway:SIM' => 'SIM Card',
));

//
// Class: IOTGateway
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:IOTGateway' => 'IoT Gateway',
    'Class:IOTGateway+' => '',
    'Class:IOTGateway/Attribute:cert_created' => 'Certificate created',
    'Class:IOTGateway/Attribute:cert_created+' => '',
    'Class:IOTGateway/Attribute:cert_created/Value:no' => 'No',
    'Class:IOTGateway/Attribute:cert_created/Value:no+' => '',
    'Class:IOTGateway/Attribute:cert_created/Value:yes' => 'Yes',
    'Class:IOTGateway/Attribute:cert_created/Value:yes+' => '',
    'Class:IOTGateway/Attribute:cert_expire_date' => 'Certificate expiry',
    'Class:IOTGateway/Attribute:cert_expire_date+' => '',
    'Class:IOTGateway/Attribute:sim_number' => 'SIM Number',
    'Class:IOTGateway/Attribute:sim_number+' => '',
    'Class:IOTGateway/Attribute:pin' => 'PIN',
    'Class:IOTGateway/Attribute:pin+' => '',
    'Class:IOTGateway/Attribute:puk' => 'PUK',
    'Class:IOTGateway/Attribute:puk+' => '',
    'Class:IOTGateway/Attribute:programversion_id' => 'Program Version',
    'Class:IOTGateway/Attribute:programversion_id+' => '',
    'Class:IOTGateway/Attribute:firmwareversion_id' => 'Firmware Version',
    'Class:IOTGateway/Attribute:firmwareversion_id+' => '',
    'Class:IOTGateway/Attribute:application_id' => 'Application',
    'Class:IOTGateway/Attribute:application_id+' => '',
    'Class:IOTGateway/Attribute:remote_access' => 'Remote Access',
    'Class:IOTGateway/Attribute:remote_access+' => '',
    'Class:IOTGateway/Attribute:remote_access/Value:no' => 'No',
    'Class:IOTGateway/Attribute:remote_access/Value:no+' => '',
    'Class:IOTGateway/Attribute:remote_access/Value:yes' => 'Yes',
    'Class:IOTGateway/Attribute:remote_access/Value:yes+' => '',
    'Class:IOTGateway/Attribute:vpnd' => 'VPND',
    'Class:IOTGateway/Attribute:vpnd+' => 'VPN on Demand',
    'Class:IOTGateway/Attribute:vpnd/Value:no' => 'No',
    'Class:IOTGateway/Attribute:vpnd/Value:no+' => '',
    'Class:IOTGateway/Attribute:vpnd/Value:yes' => 'Yes',
    'Class:IOTGateway/Attribute:vpnd/Value:yes+' => '',
    'Class:IOTGateway/Attribute:iotsensors_list' => 'Sensors',
    'Class:IOTGateway/Attribute:iotsensors_list+' => '',
));

//
// Class: IOTSensor
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:IOTSensor' => 'IoT Sensor',
    'Class:IOTSensor+' => '',
    'Class:IOTSensor/Attribute:iotgateway_list' => 'Gateway',
    'Class:IOTSensor/Attribute:iotgateway_list+' => '',
));

//
// Class: IOTProgramVersion
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:IOTProgramVersion' => 'IoT Program Version',
    'Class:IOTProgramVersion+' => '',
    'Class:IOTProgramVersion/Attribute:description' => 'Description',
    'Class:IOTProgramVersion/Attribute:description+' => '',
    'Class:IOTProgramVersion/Attribute:iotgateway_list' => 'IoT Gateways',
    'Class:IOTProgramVersion/Attribute:iotgateway_list+' => '',
));

//
// Class: IOTFirmwareVersion
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:IOTFirmwareVersion' => 'IoT Firmware Version',
    'Class:IOTFirmwareVersion+' => '',
    'Class:IOTFirmwareVersion/Attribute:description' => 'Description',
    'Class:IOTFirmwareVersion/Attribute:description+' => '',
    'Class:IOTFirmwareVersion/Attribute:iotgateway_list' => 'IoT Gateways',
    'Class:IOTFirmwareVersion/Attribute:iotgateway_list+' => '',
));

//
// Class: IOTApplication
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:IOTApplication' => 'IoT Application',
    'Class:IOTApplication+' => '',
    'Class:IOTApplication/Attribute:description' => 'Description',
    'Class:IOTApplication/Attribute:description+' => '',
    'Class:IOTApplication/Attribute:iotgateway_list' => 'IoT Gateways',
    'Class:IOTApplication/Attribute:iotgateway_list+' => '',
));

//
// Class: lnkIOTGatewayToIOTSensor
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:lnkIOTGatewayToIOTSensor' => 'Link IoT Gateway / IoT Sensor',
    'Class:lnkIOTGatewayToIOTSensor+' => '',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotgateway_id' => 'IoT Gateway',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotgateway_id+' => '',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotgateway_name' => 'IoT Gateway name',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotgateway_name+' => '',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotsensor_id' => 'IoT Sensor',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotsensor_id+' => '',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotsensor_name' => 'IoT Sensor name',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotsensor_name+' => '',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:collection_port' => 'Collection port',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:collection_port+' => '',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:cable_number' => 'Cable number',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:cable_number+' => '',
));
