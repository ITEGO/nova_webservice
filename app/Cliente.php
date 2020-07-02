<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $clipro_cod
 * @property string $cli_Cod
 * @property string $cli_RazSoc
 * @property string $cli_NomFantasia
 * @property string $cli_Direc
 * @property string $cli_Loc
 * @property string $cliprv_Codigo
 * @property string $cli_CodPos
 * @property string $cli_Tel
 * @property string $cli_Fax
 * @property string $cli_EMail
 * @property string $cli_Modem
 * @property string $clisiv_Cod
 * @property integer $clitdc_Cod
 * @property string $cli_CUIT
 * @property string $clisib_Cod
 * @property string $cli_NroIB
 * @property string $clisig_Cod
 * @property boolean $cli_Habilitado
 * @property string $clidlp_Cod
 * @property string $clidco_Cod
 * @property string $clizon_Cod
 * @property string $cliven_Cod
 * @property string $clicvt_Cod
 * @property string $clidc1_Cod
 * @property string $clidc2_Cod
 * @property string $cli_Contacto
 * @property string $cli_RespPago
 * @property string $cli_LugarPago
 * @property string $cli_HorarioPago
 * @property string $clidep_Cod
 * @property string $clitrn_Cod
 * @property string $cli_Nota
 * @property string $clitic_Cod
 * @property float $cli_Alic
 * @property boolean $cli_ControlaCred
 * @property string $cli_PagWeb
 * @property string $cli_Password
 * @property string $cli_Activo
 * @property string $cli_FecMod
 * @property string $cliusu_Codigo
 * @property boolean $cli_FotocopiaCUIT
 * @property string $clipai_Cod
 * @property string $cliape_Cod
 * @property string $cliidm_Cod
 * @property string $cli_ControlaCredAutoriz
 * @property string $cli_Calle
 * @property string $cli_Numero
 * @property int $cliccn_ID
 * @property string $cli_Piso
 * @property string $cli_Depto
 * @property string $cli_Barrio
 * @property string $clicpl_CodLoc
 * @property string $clicpl_CodPos
 * @property string $cli_NotaIngVta
 * @property string $cli_NroSicol
 * @property string $cli_EnviaAutomComprobMail
 * @property string $cli_GeneraInteresesXMora
 * @property string $cli_eSales
 * @property Defi2Cli $defi2Cli
 * @property Apertura $apertura
 * @property DefListP $defListP
 * @property TipCli $tipCli
 * @property Deposito $deposito
 * @property DescCom $descCom
 * @property Transporte $transporte
 * @property Proveed $proveed
 * @property Vendedor $vendedor
 * @property Zona $zona
 * @property CondVtum $condVtum
 * @property Defi1Cli $defi1Cli
 * @property CabMov[] $cabMovs
 * @property CabVentum[] $cabVentas
 * @property Cheques3[] $cheques3s
 * @property CliCompumap $cliCompumap
 * @property ClientesEmp[] $clientesEmps
 * @property CliFecUltCpra $cliFecUltCpra
 * @property CliMedPag[] $cliMedPags
 * @property CliMonCtaAper[] $cliMonCtaApers
 * @property Comisione[] $comisiones
 * @property Contacto[] $contactos
 * @property Documento[] $documentos
 * @property ESalesSynchro[] $eSalesSynchros
 * @property FacturaCred[] $facturaCreds
 * @property ItemVtum[] $itemVtas
 * @property LugarEnt[] $lugarEnts
 * @property MovF[] $movFs
 * @property MovFImport[] $movFImports
 * @property RelRegCli[] $relRegClis
 * @property SegCabV[] $segCabVs
 * @property SitFcieraC $sitFcieraC
 * @property TdoCliAper[] $tdoCliApers
 */
class Cliente extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Clientes';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cli_Cod';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['clipro_cod', 'cli_RazSoc', 'cli_NomFantasia', 'cli_Direc', 'cli_Loc', 'cliprv_Codigo', 'cli_CodPos', 'cli_Tel', 'cli_Fax', 'cli_EMail', 'cli_Modem', 'clisiv_Cod', 'clitdc_Cod', 'cli_CUIT', 'clisib_Cod', 'cli_NroIB', 'clisig_Cod', 'cli_Habilitado', 'clidlp_Cod', 'clidco_Cod', 'clizon_Cod', 'cliven_Cod', 'clicvt_Cod', 'clidc1_Cod', 'clidc2_Cod', 'cli_Contacto', 'cli_RespPago', 'cli_LugarPago', 'cli_HorarioPago', 'clidep_Cod', 'clitrn_Cod', 'cli_Nota', 'clitic_Cod', 'cli_Alic', 'cli_ControlaCred', 'cli_PagWeb', 'cli_Password', 'cli_Activo', 'cli_FecMod', 'cliusu_Codigo', 'cli_FotocopiaCUIT', 'clipai_Cod', 'cliape_Cod', 'cliidm_Cod', 'cli_ControlaCredAutoriz', 'cli_Calle', 'cli_Numero', 'cliccn_ID', 'cli_Piso', 'cli_Depto', 'cli_Barrio', 'clicpl_CodLoc', 'clicpl_CodPos', 'cli_NotaIngVta', 'cli_NroSicol', 'cli_EnviaAutomComprobMail', 'cli_GeneraInteresesXMora', 'cli_eSales'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function defi2Cli()
    {
        return $this->belongsTo('App\Defi2Cli', 'clidc2_Cod', 'dc2_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function apertura()
    {
        return $this->belongsTo('App\Apertura', 'cliape_Cod', 'ape_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function defListP()
    {
        return $this->belongsTo('App\DefListP', 'clidlp_Cod', 'dlp_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipCli()
    {
        return $this->belongsTo('App\TipCli', 'clitic_Cod', 'tic_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function deposito()
    {
        return $this->belongsTo('App\Deposito', 'clidep_Cod', 'dep_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function descCom()
    {
        return $this->belongsTo('App\DescCom', 'clidco_Cod', 'dco_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transporte()
    {
        return $this->belongsTo('App\Transporte', 'clitrn_Cod', 'trn_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveed()
    {
        return $this->belongsTo('App\Proveed', 'clipro_cod', 'pro_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendedor()
    {
        return $this->belongsTo('App\Vendedor', 'cliven_Cod', 'ven_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function zona()
    {
        return $this->belongsTo('App\Zona', 'clizon_Cod', 'zon_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function condVtum()
    {
        return $this->belongsTo('App\CondVtum', 'clicvt_Cod', 'cvt_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function defi1Cli()
    {
        return $this->belongsTo('App\Defi1Cli', 'clidc1_Cod', 'dc1_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cabMovs()
    {
        return $this->hasMany('App\CabMov', 'cmscli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cabVentas()
    {
        return $this->hasMany('App\CabVentum', 'cvecli_CodIN', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cheques3s()
    {
        return $this->hasMany('App\Cheques3', 'ch3cli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliCompumap()
    {
        return $this->hasOne('App\CliCompumap', 'ccmcli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientesEmps()
    {
        return $this->hasMany('App\ClientesEmp', 'clecli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliFecUltCpra()
    {
        return $this->hasOne('App\CliFecUltCpra', 'cfccli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cliMedPags()
    {
        return $this->hasMany('App\CliMedPag', 'cmpcli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cliMonCtaApers()
    {
        return $this->hasMany('App\CliMonCtaAper', 'cmccli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comisiones()
    {
        return $this->hasMany('App\Comisione', 'comcli_CodIN', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactos()
    {
        return $this->hasMany('App\Contacto', 'cotcli_Codigo', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentos()
    {
        return $this->hasMany('App\Documento', 'doccli_CodIN', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eSalesSynchros()
    {
        return $this->hasMany('App\ESalesSynchro', 'cli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturaCreds()
    {
        return $this->hasMany('App\FacturaCred', 'fcccli_CodIN', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function itemVtas()
    {
        return $this->hasMany('App\ItemVtum', 'ivecli_CodIN', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugarEnts()
    {
        return $this->hasMany('App\LugarEnt', 'lencli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movFs()
    {
        return $this->hasMany('App\MovF', 'mfocli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movFImports()
    {
        return $this->hasMany('App\MovFImport', 'mficli_CodIN', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relRegClis()
    {
        return $this->hasMany('App\RelRegCli', 'reccli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function segCabVs()
    {
        return $this->hasMany('App\SegCabV', 'scvcli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sitFcieraC()
    {
        return $this->hasOne('App\SitFcieraC', 'sfccli_Cod', 'cli_Cod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tdoCliApers()
    {
        return $this->hasMany('App\TdoCliAper', 'tclcli_CodIN', 'cli_Cod');
    }
}
