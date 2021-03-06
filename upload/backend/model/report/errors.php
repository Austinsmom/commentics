<?php
namespace Commentics;

class ReportErrorsModel extends Model {
	public function getErrors() {
		if (file_exists(CMTX_DIR_LOGS . 'errors.log')) {
			$errors = file_get_contents(CMTX_DIR_LOGS . 'errors.log');
		} else {
			$errors = '';
		}

		return $errors;
	}

	public function resetErrors() {
		$error_file = CMTX_DIR_LOGS . 'errors.log';

		$handle = fopen($error_file, 'w');

		fputs($handle, '');

		fclose($handle);
	}
}
?>