-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `inventory_db`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `activation`
-- 

CREATE TABLE `activation` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `admin` varchar(15) collate utf8_bin NOT NULL,
  `warehouses` varchar(15) collate utf8_bin NOT NULL,
  `package` int(10) NOT NULL,
  `cost` varchar(20) collate utf8_bin NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `c_date` datetime NOT NULL,
  `c_by` varchar(15) collate utf8_bin NOT NULL,
  `confrim_by` varchar(15) collate utf8_bin NOT NULL,
  `confrim_date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `activation`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `admin`
-- 

CREATE TABLE `admin` (
  `id` varchar(15) collate utf8_bin NOT NULL,
  `username` varchar(25) collate utf8_bin NOT NULL,
  `name` varchar(55) collate utf8_bin default NULL,
  `lastname` varchar(55) collate utf8_bin default NULL,
  `address` varchar(255) collate utf8_bin default NULL,
  `mail` varchar(55) collate utf8_bin NOT NULL,
  `phon` varchar(15) collate utf8_bin NOT NULL,
  `city` varchar(2) collate utf8_bin NOT NULL,
  `code` varchar(32) collate utf8_bin default NULL,
  `staus` int(1) NOT NULL default '0',
  `password` varchar(64) collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 
-- dump ตาราง `admin`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `article`
-- 

CREATE TABLE `article` (
  `id` varchar(5) collate utf8_bin NOT NULL,
  `partnumber` varchar(5) collate utf8_bin NOT NULL,
  `warehouse` varchar(15) collate utf8_bin NOT NULL,
  `category` int(3) NOT NULL,
  `brand` varchar(50) collate utf8_bin NOT NULL,
  `stockcode` varchar(50) collate utf8_bin NOT NULL,
  `description` varchar(255) collate utf8_bin NOT NULL,
  `c_date` datetime NOT NULL,
  `c_by` varchar(15) collate utf8_bin NOT NULL,
  `u_date` datetime NOT NULL,
  `u_by` varchar(15) collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `warehouse` (`warehouse`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 
-- dump ตาราง `article`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `category`
-- 

CREATE TABLE `category` (
  `id` int(5) unsigned NOT NULL auto_increment,
  `name` varchar(55) collate utf8_bin NOT NULL,
  `description` varchar(255) collate utf8_bin NOT NULL,
  `icon` varchar(25) collate utf8_bin NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `category`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `input_master`
-- 

CREATE TABLE `input_master` (
  `id` int(20) unsigned NOT NULL,
  `in_number` varchar(10) collate utf8_bin NOT NULL,
  `id_doc` varchar(10) collate utf8_bin NOT NULL,
  `partnumber` varchar(5) collate utf8_bin NOT NULL,
  `in_qty` int(10) NOT NULL,
  `warehouse` varchar(15) collate utf8_bin NOT NULL,
  `attribute` varchar(1) collate utf8_bin NOT NULL,
  `arrival_qty` int(10) NOT NULL,
  `receive_qty` int(10) NOT NULL,
  `status` varchar(1) collate utf8_bin NOT NULL,
  `r_by` varchar(15) collate utf8_bin NOT NULL,
  `r_date` datetime NOT NULL,
  `u_by` varchar(15) collate utf8_bin NOT NULL,
  `u_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 
-- dump ตาราง `input_master`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `input_po`
-- 

CREATE TABLE `input_po` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `in_number` varchar(10) collate utf8_bin NOT NULL,
  `slip_number` varchar(20) collate utf8_bin NOT NULL,
  `status` varchar(1) collate utf8_bin NOT NULL,
  `c_by` varchar(15) collate utf8_bin NOT NULL,
  `c_date` datetime NOT NULL,
  `u_by` varchar(15) collate utf8_bin NOT NULL,
  `u_date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `input_po`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `output_master`
-- 

CREATE TABLE `output_master` (
  `id` int(20) unsigned NOT NULL,
  `out_number` varchar(10) collate utf8_bin NOT NULL,
  `id_doc` varchar(10) collate utf8_bin NOT NULL,
  `partnumber` varchar(5) collate utf8_bin NOT NULL,
  `in_qty` int(10) NOT NULL,
  `warehouse` varchar(15) collate utf8_bin NOT NULL,
  `attribute` varchar(1) collate utf8_bin NOT NULL,
  `out_qty` int(10) NOT NULL,
  `status` varchar(1) collate utf8_bin NOT NULL,
  `r_by` varchar(15) collate utf8_bin NOT NULL,
  `r_date` datetime NOT NULL,
  `u_by` varchar(15) collate utf8_bin NOT NULL,
  `u_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 
-- dump ตาราง `output_master`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `output_po`
-- 

CREATE TABLE `output_po` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `out_number` varchar(10) collate utf8_bin NOT NULL,
  `slip_number` varchar(20) collate utf8_bin NOT NULL,
  `status` varchar(1) collate utf8_bin NOT NULL,
  `c_by` varchar(15) collate utf8_bin NOT NULL,
  `c_date` datetime NOT NULL,
  `u_by` varchar(15) collate utf8_bin NOT NULL,
  `u_date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `output_po`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `package`
-- 

CREATE TABLE `package` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(50) collate utf8_bin NOT NULL,
  `cost` int(10) NOT NULL,
  `description` varchar(255) collate utf8_bin NOT NULL,
  `icon` varchar(25) collate utf8_bin NOT NULL,
  `start` int(10) NOT NULL,
  `end` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `package`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `serialrecord`
-- 

CREATE TABLE `serialrecord` (
  `id` int(25) unsigned NOT NULL auto_increment,
  `partnumber` varchar(5) collate utf8_bin NOT NULL,
  `slip_in` varchar(20) collate utf8_bin NOT NULL,
  `slip_out` varchar(20) collate utf8_bin NOT NULL,
  `serial` varchar(25) collate utf8_bin NOT NULL,
  `attribute` varchar(1) collate utf8_bin NOT NULL,
  `status` varchar(1) collate utf8_bin NOT NULL,
  `c_by` varchar(15) collate utf8_bin NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `serialrecord`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `strs_master`
-- 

CREATE TABLE `strs_master` (
  `id` int(20) unsigned NOT NULL auto_increment,
  `warehouse` varchar(15) collate utf8_bin NOT NULL,
  `partnumber` varchar(5) collate utf8_bin NOT NULL,
  `attribute` varchar(1) collate utf8_bin NOT NULL,
  `slip_number` varchar(20) collate utf8_bin NOT NULL,
  `slip_line` varchar(10) collate utf8_bin NOT NULL,
  `org_slip` varchar(20) collate utf8_bin NOT NULL,
  `org_line` varchar(10) collate utf8_bin NOT NULL,
  `trans_qty` varchar(10) collate utf8_bin NOT NULL,
  `onhand` varchar(10) collate utf8_bin NOT NULL,
  `operand` varchar(1) collate utf8_bin NOT NULL,
  `unit_cost` int(15) NOT NULL,
  `total_cost` varchar(15) collate utf8_bin NOT NULL,
  `amount_cost` varchar(15) collate utf8_bin NOT NULL,
  `trans_by` varchar(15) collate utf8_bin NOT NULL,
  `trans_date` datetime NOT NULL,
  `u_by` varchar(15) collate utf8_bin NOT NULL,
  `u_date` datetime NOT NULL,
  `last_trans` int(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `strs_master`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `warehouses`
-- 

CREATE TABLE `warehouses` (
  `id` varchar(15) collate utf8_bin NOT NULL,
  `admin` varchar(15) collate utf8_bin NOT NULL,
  `name` varchar(50) collate utf8_bin NOT NULL,
  `description` varchar(255) collate utf8_bin NOT NULL,
  `package` int(2) NOT NULL,
  `u_by` varchar(15) collate utf8_bin NOT NULL,
  `u_date` datetime NOT NULL,
  `status` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 
-- dump ตาราง `warehouses`
-- 

