<?php
/**
 * Meridian
 * Copyright (C) 2010-2011 Jack Polgar
 * 
 * This file is part of Meridian.
 * 
 * Meridian is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 3 only.
 * 
 * Meridian is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Meridian. If not, see <http://www.gnu.org/licenses/>.
 */

define("SYSPATH", dirname(__FILE__).'/system/');
define("APPPATH", dirname(__FILE__).'/app/');

require_once SYSPATH.'base.php';

Meridian::init();
Meridian::run();