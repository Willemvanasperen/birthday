<?php

require(ROOT . "model/birthdayModel.php");

function index()
{
	render("birthday/index", array(
		'birthdays' => getAllbirthdays()
	));
}

function create()
{
	render("birthday/create");
}

function createSave()
{
	if (!createbirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "birthday/index");
}

function edit($id)
{
	render("birthday/edit", array(
		'birthday' => getbirthday($id)
	));
}

function editSave()
{
	if (!editbirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "birthday/index");
} 

function delete($id)
{
	if (!deletebirthday($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "birthday/index");
}
