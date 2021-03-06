<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.import.csv_file_reader' shared service.

return $this->services['prestashop.core.import.csv_file_reader'] = new \PrestaShop\PrestaShop\Core\Import\File\CsvFileReader(${($_ = isset($this->services['prestashop.adapter.import.file_opener']) ? $this->services['prestashop.adapter.import.file_opener'] : $this->load('getPrestashop_Adapter_Import_FileOpenerService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.import.normalizer.csv_value_separator']) ? $this->services['prestashop.core.import.normalizer.csv_value_separator'] : ($this->services['prestashop.core.import.normalizer.csv_value_separator'] = new \PrestaShop\PrestaShop\Core\Import\CsvValueSeparatorNormalizer())) && false ?: '_'}->normalize(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}->get("separator")));
