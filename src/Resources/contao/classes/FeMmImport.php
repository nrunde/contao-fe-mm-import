<?php
namespace Ulpr\ContaoFeMmImportBundle;

use Contao\CoreBundle\Exception\InternalServerErrorException;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class FeMmImport extends Backend
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_fe_mm_import';
    /**
     * Generate the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->genBeOutput();
        } else {
            $this->genFeOutput();
        }
    }
    /**
     * Erzeugt die Ausgebe für das Backend.
     */
    protected function genBeOutput()
    {
        $this->strTemplate          = 'be_wildcard';
        $this->Template             = new \BackendTemplate($this->strTemplate);
        $this->Template->title      = $this->headline;
        $this->Template->wildcard   = "### FE MetaModels Import ###";
    }
    /**
     * Erzeugt die Ausgebe für das Frontend.
     */
    protected function importFile()
    {
        if (\Contao\Input::post('importFile')) {
            $this->Template->firstname  = \Contao\Input::post('importFile');
        }
    }
}
