# FixCharset
PHP Function to Fix Charsets 

HOW TO USE?
-----------

01) ISO-8859-1 TO UTF-8

```
include_once 'fixCharset.php';
fixCharset($text);
```

Ex.:
```
<?php

include_once 'fixCharset.php';

$text = "a&eacute;io&ueacute;&ccedil;";

$text = fixCharset($text);

echo $text; // echo "aéioúç"

```
