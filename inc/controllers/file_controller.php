<?php

/**
* 
*/
class FileController{
	public static function fileListingFor(string $rootPath, string $initialFileName = ''): array{
			if(self::isHiddenFile($initialFileName)){
				return [];
			}
			$absolutePath = self::joinPaths($rootPath, $initialFileName);
			if(is_dir($absolutePath)){
				return self::fileListingForDirectory($rootPath, $initialFileName);
			}
			elseif(is_file($absolutePath)){
				return [$initialFileName];
			}
			return [];
	}

	//return array of file names or subdirectories (arrays of filenames)
	//based on: http://php.net/manual/en/function.readdir.php
	protected static function fileListingForDirectory(string $rootPath, string $initialFileName, array $parentArray = []): array{
		$absoluteParentPath = self::joinPaths($rootPath, $initialFileName);
		if($handle = opendir($absoluteParentPath)){
		    while(false !== ($fileName = readdir($handle))){
		        if(self::isHiddenFile($fileName)){
		        	continue;
		        }
		        $absoluteFilePath = self::joinPaths($absoluteParentPath, $fileName);
		        $relativeFilePath = self::joinPaths($initialFileName, $fileName);
		        if(is_file($absoluteFilePath)){
		        	$parentArray[] = $relativeFilePath;
		        }
		        elseif(is_dir($absoluteFilePath)){
		        	$parentArray[] = ['name' => $relativeFilePath, 'files' => self::fileListingForDirectory($rootPath, $relativeFilePath)];
		        }
		    }

		    closedir($handle);
		}
		return $parentArray;

	}

	public static function isHiddenFile(string $fileName): bool{
		return preg_match('`^\\.`', $fileName);
	}

	//POSIX compatible OS only - no windows
	public static function joinPaths(string $path1, string $path2): string{
		if($path1 === ''){
			return $path2;
		}
		$cleanedPath1 = preg_replace('`/$`', '', $path1);

		return $cleanedPath1.'/'.$path2;
	}


	
}