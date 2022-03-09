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
));

//
// Class: IOTGateway
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:IOTGateway' => 'IoT Gateway',
    'Class:IOTGateway+' => '',
    'Class:IOTGateway/Attribute:device_id' => 'Device ID',
    'Class:IOTGateway/Attribute:device_id+' => '',
    'Class:IOTGateway/Attribute:cert_created' => 'Certificate created',
    'Class:IOTGateway/Attribute:cert_created+' => '',
    'Class:IOTGateway/Attribute:cert_created/Value:no' => 'No',
    'Class:IOTGateway/Attribute:cert_created/Value:no+' => '',
    'Class:IOTGateway/Attribute:cert_created/Value:yes' => 'Yes',
    'Class:IOTGateway/Attribute:cert_created/Value:yes+' => '',
    'Class:IOTGateway/Attribute:cert_expire_date' => 'Certificate expiry',
    'Class:IOTGateway/Attribute:cert_expire_date+' => '',
    'Class:IOTGateway/Attribute:material_list' => 'List of material',
    'Class:IOTGateway/Attribute:material_list+' => '',
    'Class:IOTGateway/Attribute:simcard_id' => 'SIM Card',
    'Class:IOTGateway/Attribute:simcard_id+' => '',
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
    'Class:IOTGateway/Attribute:vpnd' => 'VPN on Demand',
    'Class:IOTGateway/Attribute:vpnd+' => '',
    'Class:IOTGateway/Attribute:vpnd/Value:no' => 'No',
    'Class:IOTGateway/Attribute:vpnd/Value:no+' => '',
    'Class:IOTGateway/Attribute:vpnd/Value:yes' => 'Yes',
    'Class:IOTGateway/Attribute:vpnd/Value:yes+' => '',
    'Class:IOTGateway/Attribute:iotsensors_list' => 'Sensors',
    'Class:IOTGateway/Attribute:iotsensors_list+' => '',
    'IOTGateway:Certificate' => 'Certificate',
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


//
// Class: IOTSimCard
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:IOTSimCard' => 'SIM Card',
    'Class:IOTSimCard+' => 'SIM Card to link to a Mobile Phone or Tablet',
    'Class:IOTSimCard/Attribute:sim' => 'SIM number',
    'Class:IOTSimCard/Attribute:sim+' => 'Number of the SIM card',
    'Class:IOTSimCard/Attribute:iotgateways_list' => 'IoT Gateways',
    'Class:IOTSimCard/Attribute:phone_number' => 'Mobile phone number',
    'Class:IOTSimCard/Attribute:phone_number+' => 'The mobile number linked to this SIM card',
    'Class:IOTSimCard/Attribute:pin' => 'PIN',
    'Class:IOTSimCard/Attribute:pin+' => 'PIN of the SIM card',
    'Class:IOTSimCard/Attribute:puk' => 'PUK',
    'Class:IOTSimCard/Attribute:puk+' => 'PUK of the SIM card',
    'Class:IOTSimCard/Attribute:contract_start_date' => 'Contract starts',
    'Class:IOTSimCard/Attribute:contract_start_date+' => '',
    'Class:IOTSimCard/Attribute:contract_end_date' => 'Contract ends',
    'Class:IOTSimCard/Attribute:contract_end_date+' => '',
    'Class:IOTSimCard/Attribute:termination_till_date' => 'Termination till',
    'Class:IOTSimCard/Attribute:termination_till_date+' => '',
    'Class:IOTSimCard/Attribute:extended_till_date' => 'Extended till',
    'Class:IOTSimCard/Attribute:extended_till_date+' => '',
    'Class:IOTSimCard/Attribute:notice_by_date' => 'Notice giving by',
    'Class:IOTSimCard/Attribute:notice_by_date+' => '',
    'IOTSimCard:info' => 'General info',
    'IOTSimCard:numbers' => 'Card info',
    'IOTSimCard:date' => 'Contract dates',
));

//
// Application Menu
//
Dict::Add('EN US', 'English', 'English', array(
    'Menu:IOTManagement' => 'IoT Management',
    'Menu:IOTSpace' => 'IoT Space',
    'Menu:IOTSpace:Devices' => 'IoT Devices',
    'Menu:IOTSpace:Options' => 'IoT Configuration',
    'Menu:IOTShortCut' => 'Shotcuts',
    'Menu:IOTGateway' => 'IoT Gateways',
    'Menu:IOTGateway+' => 'IoT Gateways',
    'Menu:IOTSensor' => 'IoT Sensors',
    'Menu:IOTSensor+' => 'IoT Sensors',
    'Menu:IOTSimCard' => 'SIM Cards',
    'Menu:IOTSimCard+' => 'SIM Cards',
));
