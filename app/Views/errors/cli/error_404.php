<?php

use CodeIgniter\CLI\CLI;

CLI::error('ERROR: ' . $code);
CLI::write($message ?? 'No message.');
CLI::newLine();
