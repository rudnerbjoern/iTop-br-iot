<?php

/**
 * @copyright   Copyright (C) 2021 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2022-03-07
 *
 * Localized data
 */

Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:Model/Attribute:type/Value:IOTGateway' => 'IoT Gateway',
    'Class:Model/Attribute:type/Value:IOTGateway+' => '',
    'Class:Model/Attribute:type/Value:IOTSensor' => 'IoT Sensor',
    'Class:Model/Attribute:type/Value:IOTSensor+' => '',
    'IOTGateway:Certificate' => 'Zertifikat',
    'IOTGateway:SIM' => 'SIM Karte',
));

//
// Class: IOTGateway
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:IOTGateway' => 'IoT Gateway',
    'Class:IOTGateway+' => '',
    'Class:IOTGateway/Attribute:device_id' => 'Device ID',
    'Class:IOTGateway/Attribute:device_id+' => 'Muss eine gültige GUID sein',
    'Class:IOTGateway/Attribute:cert_created' => 'Zertifikat erstellt',
    'Class:IOTGateway/Attribute:cert_created+' => '',
    'Class:IOTGateway/Attribute:cert_created/Value:no' => 'Nein',
    'Class:IOTGateway/Attribute:cert_created/Value:no+' => '',
    'Class:IOTGateway/Attribute:cert_created/Value:yes' => 'Ja',
    'Class:IOTGateway/Attribute:cert_created/Value:yes+' => '',
    'Class:IOTGateway/Attribute:cert_expire_date' => 'Zertifikat Ablaufdatum',
    'Class:IOTGateway/Attribute:cert_expire_date+' => '',
    'Class:IOTGateway/Attribute:material_list' => 'Materialliste',
    'Class:IOTGateway/Attribute:material_list+' => '',
    'Class:IOTGateway/Attribute:sim_number' => 'SIM Nummer',
    'Class:IOTGateway/Attribute:sim_number+' => '',
    'Class:IOTGateway/Attribute:pin' => 'PIN',
    'Class:IOTGateway/Attribute:pin+' => '',
    'Class:IOTGateway/Attribute:puk' => 'PUK',
    'Class:IOTGateway/Attribute:puk+' => '',
    'Class:IOTGateway/Attribute:programversion_id' => 'Programm Version',
    'Class:IOTGateway/Attribute:programversion_id+' => '',
    'Class:IOTGateway/Attribute:firmwareversion_id' => 'Firmware Version',
    'Class:IOTGateway/Attribute:firmwareversion_id+' => '',
    'Class:IOTGateway/Attribute:remote_access' => 'Remote Access',
    'Class:IOTGateway/Attribute:remote_access+' => '',
    'Class:IOTGateway/Attribute:remote_access/Value:no' => 'Nein',
    'Class:IOTGateway/Attribute:remote_access/Value:no+' => '',
    'Class:IOTGateway/Attribute:remote_access/Value:yes' => 'Ja',
    'Class:IOTGateway/Attribute:remote_access/Value:yes+' => '',
    'Class:IOTGateway/Attribute:vpnd' => 'VPND',
    'Class:IOTGateway/Attribute:vpnd+' => 'VPN on Demand',
    'Class:IOTGateway/Attribute:vpnd/Value:no' => 'Nein',
    'Class:IOTGateway/Attribute:vpnd/Value:no+' => '',
    'Class:IOTGateway/Attribute:vpnd/Value:yes' => 'Ja',
    'Class:IOTGateway/Attribute:vpnd/Value:yes+' => '',
    'Class:IOTGateway/Attribute:iotsensors_list' => 'Sensoren',
    'Class:IOTGateway/Attribute:iotsensors_list+' => '',
));

//
// Class: IOTSensor
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:IOTSensor' => 'IoT Sensor',
    'Class:IOTSensor+' => '',
    'Class:IOTSensor/Attribute:iotgateway_list' => 'Gateway',
    'Class:IOTSensor/Attribute:iotgateway_list+' => '',
));

//
// Class: IOTProgramVersion
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:IOTProgramVersion' => 'IoT Programm Version',
    'Class:IOTProgramVersion+' => '',
    'Class:IOTProgramVersion/Attribute:description' => 'Beschreibung',
    'Class:IOTProgramVersion/Attribute:description+' => '',
    'Class:IOTProgramVersion/Attribute:iotgateway_list' => 'IoT Gateways',
    'Class:IOTProgramVersion/Attribute:iotgateway_list+' => '',
));

//
// Class: IOTFirmwareVersion
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:IOTFirmwareVersion' => 'IoT Firmware Version',
    'Class:IOTFirmwareVersion+' => '',
    'Class:IOTFirmwareVersion/Attribute:description' => 'Beschreibung',
    'Class:IOTFirmwareVersion/Attribute:description+' => '',
    'Class:IOTFirmwareVersion/Attribute:iotgateway_list' => 'IoT Gateways',
    'Class:IOTFirmwareVersion/Attribute:iotgateway_list+' => '',
));

//
// Class: IOTApplication
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:IOTApplication' => 'IoT Applikation',
    'Class:IOTApplication+' => '',
    'Class:IOTApplication/Attribute:description' => 'Beschreibung',
    'Class:IOTApplication/Attribute:description+' => '',
    'Class:IOTApplication/Attribute:iotgateway_list' => 'IoT Gateways',
    'Class:IOTApplication/Attribute:iotgateway_list+' => '',
));

//
// Class: lnkIOTGatewayToIOTSensor
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:lnkIOTGatewayToIOTSensor' => 'Link IoT Gateway / IoT Sensor',
    'Class:lnkIOTGatewayToIOTSensor+' => '',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotgateway_id' => 'IoT Gateway',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotgateway_id+' => '',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotgateway_name' => 'IoT Gateway Name',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotgateway_name+' => '',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotsensor_id' => 'IoT Sensor',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotsensor_id+' => '',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotsensor_name' => 'IoT Sensor Name',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:iotsensor_name+' => '',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:collection_port' => 'Collection Port',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:collection_port+' => '',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:cable_number' => 'Kabelnummer',
    'Class:lnkIOTGatewayToIOTSensor/Attribute:cable_number+' => '',
));

//
// Application Menu
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Menu:IOTManagement' => 'IoT Verwaltung',
    'Menu:IOTSpace' => 'IoT Bereich',
    'Menu:IOTSpace:Devices' => 'IoT Geräte',
    'Menu:IOTSpace:Options' => 'IoT Konfiguration',
    'Menu:IOTShortCut' => 'Shotcuts',
    'Menu:IOTGateway' => 'IoT Gateways',
    'Menu:IOTGateway+' => 'IoT Gateways',
    'Menu:IOTSensor' => 'IoT Sensoren',
));
