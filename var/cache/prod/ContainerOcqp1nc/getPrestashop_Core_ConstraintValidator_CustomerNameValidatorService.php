<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.constraint_validator.customer_name_validator' shared service.

return $this->services['prestashop.core.constraint_validator.customer_name_validator'] = new \PrestaShop\PrestaShop\Core\ConstraintValidator\CustomerNameValidator(${($_ = isset($this->services['prestashop.core.string.character_cleaner']) ? $this->services['prestashop.core.string.character_cleaner'] : ($this->services['prestashop.core.string.character_cleaner'] = new \PrestaShop\PrestaShop\Core\String\CharacterCleaner())) && false ?: '_'});
