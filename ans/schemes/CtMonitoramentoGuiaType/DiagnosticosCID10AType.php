<?php

namespace ans\schemes\CtMonitoramentoGuiaType;

/**
 * Class representing DiagnosticosCID10AType
 */
class DiagnosticosCID10AType
{

    /**
     * @property string[] $diagnoticoCID
     */
    private $diagnoticoCID = null;

    /**
     * Adds as diagnoticoCID
     *
     * @return self
     * @param string $diagnoticoCID
     */
    public function addToDiagnoticoCID($diagnoticoCID)
    {
        $this->diagnoticoCID[] = $diagnoticoCID;
        return $this;
    }

    /**
     * isset diagnoticoCID
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiagnoticoCID($index)
    {
        return isset($this->diagnoticoCID[$index]);
    }

    /**
     * unset diagnoticoCID
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiagnoticoCID($index)
    {
        unset($this->diagnoticoCID[$index]);
    }

    /**
     * Gets as diagnoticoCID
     *
     * @return string[]
     */
    public function getDiagnoticoCID()
    {
        return $this->diagnoticoCID;
    }

    /**
     * Sets a new diagnoticoCID
     *
     * @param string $diagnoticoCID
     * @return self
     */
    public function setDiagnoticoCID(array $diagnoticoCID)
    {
        $this->diagnoticoCID = $diagnoticoCID;
        return $this;
    }


}

