<?php

namespace TaskForce\Actions;

class CancelAction extends AbstractAction
{
	public function canUse($idCustomer, $idImplementer, $idUser): bool
	{
		return $idImplementer !== $idUser;
	}

	public function getName(): string
	{
		return 'Отменить';
	}

	public function getAction(): string
	{
		return 'cancel';
	}

	public function nextStatus(): string
	{
		return 'canceled';
	}
}