<?php

/*
 * Copyright 2004-2014, AfterLogic Corp.
 * Licensed under AGPLv3 license or AfterLogic license
 * if commerical version of the product was purchased.
 * See the LICENSE file for a full license statement.
 */

class CCompletedStep extends AInstallerStep
{
	public function DoPost()
	{
		return true;
	}

	public function TemplateValues()
	{
		return array();
	}
}