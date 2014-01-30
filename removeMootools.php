// stop loading the js files
unset($this->_scripts[JURI::root(true).'/media/system/js/mootools-core.js']); 
unset($this->_scripts[JURI::root(true).'/media/system/js/mootools-more.js']); 
unset($this->_scripts[JURI::root(true).'/media/system/js/core.js']); 
unset($this->_scripts[JURI::root(true).'/media/system/js/caption.js']); 

// stop initialising instance
if (isset($this->_script['text/javascript']))
{
    $this->_script['text/javascript'] = preg_replace('%window\.addEvent\(\'load\',\s*function\(\)\s*{\s*new\s*JCaption\(\'img.caption\'\);\s*}\);\s*%', '', $this->_script['text/javascript']);
    if (empty($this->_script['text/javascript']))
        unset($this->_script['text/javascript']);
}

source: http://www.acuit.com.au/Blogs/removing-jcaption-in-joomla2.5.html
