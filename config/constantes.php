<?php

return [	
    'perfil' => [
	    '' => '',
        '1' => 'Oftalmólogo',
        '2' => 'Optómetra',
        '3' => 'Psicoterapeuta',
        '4' => 'Centro Medico',
        '5' => 'Paciente',
        '6' => 'Adulto Responsable'
    ],

    'tipo_documento' => [
        'RC' => 'Registro Civil',
        'TI' => 'Tarjeta de Identidad',
        'CC' => 'Cédula de Ciudadanía',
        'CE' => 'Cédula de Extranjería',
        'AS' => 'Adulto sin identificación',
        'MS' => 'Mayor sin identificación'
    ],

    'rol_user' => [
        'AD' => 'Administrador',
        'AC' => 'Admin. Clinica',
        'AS' => 'Asesor Comercial',
        'ME' => 'Medico',
        'PA' => 'Paciente'
    ],

    'rol_admin' => [
        'AD' => 'Administrador',
        'AS' => 'Asesor Comercial',
    ],

    'estado' => [
        'AC' => 'Activo',
        'IN' => 'Inactivo'
    ],

    'estado_cita' => [
        'AC' => 'Activa',
        'IC' => 'Iniciar Consulta',
        'CA' => 'Cancelada',
        'RE' => 'Realizada',
        'IN' => 'Inactiva'
    ],

    'estado_prog' => [
        'AC' => 'Activa',
        'CU' => 'Cumplida',
        'IN' => 'Inactiva'
    ],

    'zona' => [
        'U' => 'Urbana',
        'R' => 'Rural'
    ],

    'sexo' => [
        'M' => 'Masculino',
        'F' => 'Femenino'
    ],

    'fixation' => [
        'CIN' => 'Central Inestable',
        'EIN' => 'Excéntrica Inestable',
        'CES' => 'Central Estable'
    ],

    'affected_eye' => [
        'IZQ' => 'Izquierdo',
        'DER' => 'Derecho',
        'AMB' => 'Ambos'
    ],

    'pupils' => [
        'IGU' => 'Iguales',
        'RED' => 'Redondas'
    ],

    'respond_to' => [
        'LUZ' => 'Luz',
        'ACO' => 'Acomodación'
    ],

    'pupil_exam' => [
        'PIR' => 'Pupilas Iguales, Reactivas a la luz y a la Acomodación PERRLA',
        'ARP' => 'Defecto pupilar aferente, relativo y el paradójico',
        'DPE' => 'Defecto pupilar eferente',
        'PGA' => 'Pupilas grandes y arrefléxicas',
        'THA' => 'Pupila tónica o de Holmes Adie',
        'DLA' => 'Disociación luz acercamiento',
        'SDH' => 'Síndrome de Horner'
    ],
    
	/* Tabla de Snellen */
    'visual_acuity' => [
        '' => '',
	    '1' => '20/200', // (88.6 mm)
	    '2' => '20/100', // (44.3 mm)
	    '3' => '20/70',  // (31.0 mm)
	    '4' => '20/50',  // (22.1 mm)
	    '5' => '20/40',  // (17.7 mm)
	    '6' => '20/30',  // (13.3 mm)
	    '7' => '20/25',  // (11.1 mm)
	    '8' => '20/20',  // (8.8 mm)
	    '9' => '20/15',  // (6.6 mm)
	    '10' => '20/12', // (5.3 mm)
	    '11' => '20/10'  // (4.4 mm)	
    ],

    'frequency' => [
        'SEM' => 'Semanales',
        'QUI' => 'Quincenales',
        'MEN' => 'Mensuales'
    ],

    'screen' => [
        'OFF' => 'Filtro desactivado',
        'ON' => 'Filtro Activado'
    ],
    'screen_eye' => [
        'FVE' => 'Filtro Verde',
        'FRO' => 'Filtro Rojo'
    ],
    'si_no' => [
        '0' => 'No',
        '1' => 'Si'
    ],

	'cc' => [
		'' => '',
        '0.50' => '0.50',
        '0.75' => '0.75',
        '1.00' => '1.00',
		'1.25' => '1.25',
		'1.50' => '1.50',
		'1.75' => '1.75',
		'2.00' => '2.00',
		'J1' => 'J1',
		'J2' => 'J2',
		'J3' => 'J3',
		'J4' => 'J4',
		'J5' => 'J5',
		'J6' => 'J6',
		'J7' => 'J7',
		'SMC' => 'SMC'
    ],

    'sc' => [
		'' => '',
        '20/15' => '20/15',
        '20/20' => '20/20',
		'20/25' => '20/25',
		'20/30' => '20/30',
		'20/40' => '20/40',
		'20/50' => '20/50',
		'20/60' => '20/60',
		'20/70' => '20/70',
		'20/80' => '20/80',
		'20/90' => '20/90',
		'20/100' => '20/100',
		'20/150' => '20/150',
		'20/200' => '20/200',
		'20/300' => '20/300',
		'20/400' => '20/400',
		'20/800' => '20/800'
    ],
	
	'ojoDominante' => [
		'' => '',
		'Derecho' => 'Derecho',
        'Izquierdo' => 'Izquierdo',
		'Derecho Unico' => 'Derecho Unico',
		'Izquierdo Unico' => 'Izquierdo Unico'		
    ],	
		
	'manoDominante' => [
		'' => '',
		'Derecho' => 'Derecho',
        'Izquierdo' => 'Izquierdo',
		'Derecho Unico' => 'Derecho Unico',
		'Izquierdo Unico' => 'Izquierdo Unico'		
    ],
	
	'ho' => [
	    '' => '',
		'E' => 'E',	
		'EXTRA' => 'EXTRA',
		'E(T)A' => 'E(T)A',
		'E(T)D' => 'E(T)D',
		'E(T)' => 'E(T)',
		'ETA' => 'ETA',
		'ETD' => 'ETD',
		'ETI' => 'ETI',
		'X' => 'X',
		'X(T)A' => 'X(T)A',
		'X(T)D' => 'X(T)D',
		'X(T)I' => 'X(T)I',
		'XTA' => 'XTA',
		'XTD' => 'XTD',
		'XTI' => 'XTI',
		'ORTHO' => 'ORTHO'		
    ],
	
	've' => [
	    '' => '',
		'E' => 'E',	
		'EXTRA' => 'EXTRA',
		'E(T)A' => 'E(T)A',
		'E(T)D' => 'E(T)D',
		'E(T)' => 'E(T)',
		'ETA' => 'ETA',
		'ETD' => 'ETD',
		'ETI' => 'ETI',
		'X' => 'X',
		'X(T)A' => 'X(T)A',
		'X(T)D' => 'X(T)D',
		'X(T)I' => 'X(T)I',
		'XTA' => 'XTA',
		'XTD' => 'XTD',
		'XTI' => 'XTI',
		'ORTHO' => 'ORTHO'		
    ],
	
	'anguloKappa' => [
	    '' => '',
        '+' => '+',
        '0' => '0',
		'-' => '-'
    ],
	
	'LucesWorth' => [
		'' => '',
		'Fusion Plana Normal' => 'Fusion Plana Normal',
        'Supresion OD' => 'Supresion OD',
		'Supresion OI ' => 'Supresion OI ',
		'Diplopia Descruzada/Desviacion ENDO' => 'Diplopia Descruzada/Desviacion ENDO',
		'Diplopia Cruzada/Desviacion EXO' => 'Diplopia Cruzada/Desviacion EXO'			
    ],

    
	'OjoSuprime' => [
	    '' => '',
        'N/A' => 'N/A',
        'OD' => 'OD',
		'OI' => 'OI'
    ],
	
	'Bagolini' => [
	    '' => '',
        'Correspondencia Sensorial Normal' => 'Correspondencia Sensorial Normal',
        'Supresion OD' => 'Supresion OD',
		'Supresion OI' => 'Supresión OI',
		'Diplopia' => 'Diplopia',
		'Supresion Central con Fusion Periferica' => 'Supresion Central con Fusion Periferica',
		'Correspondencia Sensorial Anomala' => 'Correspondencia Sensorial Anomala',
		'Supresion Central' => 'Supresion Central'
    ],	

	'PostImagenes' => [
	    '' => '',
        'Correspondecia Retiniana Normal CRN' => 'Correspondecia Retiniana Normal CRN',
        'Correspondecia Retiniana Anomala CRN' => 'Correspondecia Retiniana Anomala CRN'
    ],
	
	'CorrespondenciaSensorial' => [
	    '' => '',
        'Correspondencia Sensorial Normal (CSN)' => 'Correspondencia Sensorial Normal (CSN)',
        'Correspondencia Sensorial Anomala (CSA)' => 'Correspondencia Sensorial Anomala (CSA)'
    ],

	'TestUsado' => [
	    '' => '',
        'Test de Lang I' => 'Test de Lang I',
        'Test de Lang II' => 'Test de Lang II',
		'Test de Firsby' => 'Test de Firsby',
		'Test TNO' => 'Test TNO',
		'Test TITMUS' => 'Test TITMUS',
		'Test PRST/Randot' => 'Test PRST/Randot',
		'Test SSST' => 'Test SSST'
    ],

    'rips' => [
	    '' => '',
        'H000' => 'ORZUELO Y OTRAS INFLAMACIONES PROFUNDAS DEL PARPADO',
        'H001' => 'CALACIO [CHALAZION]',
        'H010' => 'BLEFARITIS',
        'H011' => 'DERMATOSIS NO INFECCIOSA DEL PARPADO',
        'H018' => 'OTRAS INFLAMACIONES ESPECIFICADAS DEL PARPADO',
        'H019' => 'INFLAMACION DEL PARPADO, NO ESPECIFICADA',
        'H020' => 'ENTROPION Y TRIQUIASIS PALPEBRAL',
        'H021' => 'ECTROPION DEL PARPADO',
        'H022' => 'LAGOFTALMOS',
        'H023' => 'BLEFAROCALASIA',
        'H024' => 'BLEFAROPTOSIS',
        'H025' => 'OTROS TRASTORNOS FUNCIONALES DEL PARPADO',
        'H026' => 'XANTELASMA DEL PARPADO',
        'H027' => 'OTROS TRASTORNOS DEGENERATIVOS DEL PARPADO Y DEL AREA PERIOCULAR',
        'H028' => 'OTROS TRASTORNOS ESPECIFICADOS DEL PARPADO',
        'H029' => 'TRASTORNOS DEL PARPADO, NO ESPECIFICADO',
        'H030' => 'INFECCION E INFESTACION PARASITARIAS DEL PARPADO EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H031' => 'COMPROMISO DEL PARPADO EN ENFERMEDADES INFECCIOSAS CLASIFICADAS EN OTRA PARTE',
        'H038' => 'COMPROMISO DEL PARPADO EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H040' => 'DACRIOADENITIS',
        'H041' => 'OTROS TRASTORNOS DE LA GLANDULA LAGRIMAL',
        'H042' => 'EPIFORA',
        'H043' => 'INFLAMACION AGUDA Y LA NO ESPECIFICADA DE LAS VIAS LAGRIMALES',
        'H044' => 'INFLAMACION CRONICA DE LAS VIAS LAGRIMALES',
        'H045' => 'ESTENOSIS E INSUFICIENCIA DE LAS VIAS LAGRIMALES',
        'H046' => 'OTROS CAMBIOS DE LAS VIAS LAGRIMALES',
        'H048' => 'OTROS TRASTORNOS ESPECIFICADOS DEL APARATO LAGRIMAL',
        'H049' => 'TRASTORNO DEL APARATO LAGRIMAL, NO ESPECIFICADO',
        'H050' => 'INFLAMACION AGUDA DE LA ORBITA',
        'H051' => 'TRASTORNOS INFLAMATORIOS CRONICOS DE LA ORBITA',
        'H052' => 'AFECCIONES EXOFTALMICAS',
        'H053' => 'DEFORMIDAD DE LA ORBITA',
        'H054' => 'ENOFTALMIA',
        'H055' => 'RETENCION DE CUERPO EXTRAÑO (ANTIGUO), CONSECUTIVA A HERIDA PENETRANTE DE LA ORBITA',
        'H058' => 'OTROS TRASTORNOS DE LA ORBITA',
        'H059' => 'TRASTORNO DE LA ORBITA, NO ESPECIFICADO',
        'H060' => 'TRASTORNOS DEL APARATO LAGRIMAL EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H061' => 'INFECCION O INFESTACION PARASITARIA DE LA ORBITA EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H062' => 'EXOFTALMIA HIPERTIROIDEA (E05.-†)',
        'H063' => 'OTROS TRASTORNOS DE LA ORBITA EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H100' => 'CONJUNTIVITIS MUCOPURULENTA',
        'H101' => 'CONJUNTIVITIS ATOPICA AGUDA',
        'H102' => 'OTRAS CONJUNTIVITIS AGUDAS',
        'H103' => 'CONJUNTIVITIS AGUDA, NO ESPECIFICADA',
        'H104' => 'CONJUNTIVITIS CRONICA',
        'H105' => 'BLEFAROCONJUNTIVITIS',
        'H108' => 'OTRAS CONJUNTIVITIS',
        'H109' => 'CONJUNTIVITIS, NO ESPECIFICADA',
        'H110' => 'PTERIGION',
        'H111' => 'DEGENERACIONES Y DEPOSITOS CONJUNTIVALES',
        'H112' => 'CICATRICES CONJUNTIVALES',
        'H113' => 'HEMORRAGIA CONJUNTIVAL',
        'H114' => 'OTROS TRASTORNOS VASCULARES Y QUISTES CONJUNTIVALES',
        'H118' => 'OTROS TRASTORNOS ESPECIFICADOS DE LA CONJUNTIVA',
        'H119' => 'TRASTORNO DE LA CONJUNTIVA, NO ESPECIFICADO',
        'H130' => 'INFECCION FILARICA DE LA CONJUNTIVA (B74.-†)',
        'H131' => 'CONJUNTIVITIS EN ENFERMEDADES INFECCIOSAS Y PARASITARIAS CLASIFICADAS EN OTRA PARTE',
        'H132' => 'CONJUNTIVITIS EN OTRAS ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H133' => 'PENFIGOIDE OCULAR (L12.-†)',
        'H138' => 'OTROS TRASTORNOS DE LA CONJUNTIVA EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H150' => 'ESCLERITIS',
        'H151' => 'EPISCLERITIS',
        'H158' => 'OTROS TRASTORNOS DE LA ESCLEROTICA',
        'H159' => 'TRASTORNOS DE LA ESCLEROTICA, NO ESPECIFICADO',
        'H160' => 'ULCERA DE LA CORNEA',
        'H161' => 'OTRAS QUERATITIS SUPERFICIALES SIN CUNJUNTIVITIS',
        'H162' => 'QUERATOCONJUNTIVITIS',
        'H163' => 'QUERATITIS INTERSTICIAL Y PROFUNDA',
        'H164' => 'NEOVASCULARIZACION DE LA CORNEA',
        'H168' => 'OTRAS QUERATITIS',
        'H169' => 'QUERATITIS, NO ESPECIFICADA',
        'H170' => 'LEUCOMA ADHERENTE',
        'H171' => 'OTRAS OPACIDADES CENTRALES DE LA CORNEA',
        'H178' => 'OTRAS OPACIDADES O CICATRICES DE LA CORNEA',
        'H179' => 'CICATRIZ U OPACIDAD DE LA CORNEA, NO ESPECIFICADA',
        'H180' => 'PIGMENTACIONES Y DEPOSITOS EN LA CORNEA',
        'H181' => 'QUERATOPATIA VESICULAR',
        'H182' => 'OTROS EDEMAS DE LA CORNEA',
        'H183' => 'CAMBIOS EN LAS MEMBRANAS DE LA CORNEA',
        'H184' => 'DEGENERACION DE LA CORNEA',
        'H185' => 'DISTROFIA HEREDITARIA DE LA CORNEA',
        'H186' => 'QUERATOCONO',
        'H187' => 'OTRAS DEFORMIDADES DE LA CORNEA',
        'H188' => 'OTROS TRASTORNOS ESPECIFICADOS DE LA CORNEA',
        'H189' => 'TRASTORNO DE LA CORNEA, NO ESPECIFICADO',
        'H190' => 'ESCLERITIS Y EPISCLERITIS EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H191' => 'QUERATITIS Y QUERATOCONJUNTIVITIS POR HERPES SIMPLE (B00.5†)',
        'H192' => 'QUERATITIS Y QUERATOCONJUNTIVITIS EN ENFERMEDADES INFECCIOSAS Y PARASITARIAS, CLASIFICADAS EN OTRA PARTE',
        'H193' => 'QUERATITIS Y QUERATOCONJUNTIVITIS EN OTRAS ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H198' => 'OTROS TRASTORNOS DE LA ESCLEROTICA Y DE LA CORNEA EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H200' => 'IRIDOCICLITIS AGUDA Y SUBAGUDA',
        'H201' => 'IRIDOCICLITIS CRONICA',
        'H202' => 'IRIDOCICLITIS INDUCIDA POR TRASTORNO DEL CRISTALINO',
        'H208' => 'OTRAS IRIDOCICLITIS ESPECIFICADAS',
        'H209' => 'IRIDOCICLITIS, NO ESPECIFICADA',
        'H210' => 'HIFEMA',
        'H211' => 'OTROS TRASTORNOS VASCULARES DEL IRIS Y DEL CUERPO CILIAR',
        'H212' => 'DEGENERACION DEL IRIS Y DEL CUERPO CILIAR',
        'H213' => 'QUISTE DEL IRIS, DEL CUERPO CILIAR Y DE LA CAMARA ANTERIOR',
        'H214' => 'MEMBRANAS PUPILARES',
        'H215' => 'OTRAS ADHERENCIAS Y DESGARROS DEL IRIS Y DEL CUERPO CILIAR',
        'H218' => 'OTROS TRASTORNOS ESPECIFICADOS DEL IRIS Y DEL CUERPO CILIAR',
        'H219' => 'DEL IRIS Y DEL CUERPO CILIAR, NO ESPECIFICADO',
        'H220' => 'IRIDOCICLITIS EN ENFERMEDADES INFECCIOSAS Y PARASITARIAS CLASIFICADAS EN OTRA PARTE',
        'H221' => 'IRIDOCICLITIS EN OTRAS ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H228' => 'OTROS TRASTORNOS DEL IRIS Y DEL CUERPO CILIAR EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H250' => 'CATARATA SENIL INCIPIENTE',
        'H251' => 'CATARATA SENIL NUCLEAR',
        'H252' => 'CATARATA SENIL, TIPO MORGAGNIAN',
        'H258' => 'OTRAS CATARATAS SENILES',
        'H259' => 'CATARATA SENIL, NO ESPECIFICADA',
        'H260' => 'CATARATA INFANTIL, JUVENIL Y PRESENIL',
        'H261' => 'CATARATA TRAUMATICA',
        'H262' => 'CATARATA COMPLICADA',
        'H263' => 'CATARATA INDUCIDA POR DROGAS',
        'H264' => 'CATARATA RESIDUAL',
        'H268' => 'OTRAS FORMAS ESPECIFICADAS DE CATARATA',
        'H269' => 'CATARATA, NO ESPECIFICADA',
        'H270' => 'AFAQUIA',
        'H271' => 'LUXACION DEL CRISTALINO',
        'H278' => 'OTROS TRASTORNOS ESPECIFICADOS DEL CRISTALINO',
        'H279' => 'TRASTORNO DEL CRISTALINO, NO ESPECIFICADO',
        'H280' => 'CATARATA DIABETICA (E10-E14† CON CUARTO CARACTER COMUN .3)',
        'H281' => 'CATARATA EN OTRAS ENFERMEDADES ENDOCRINAS, NUTRICIONALES Y METABOLICAS CLASIFICADAS EN OTRA PARTE',
        'H282' => 'CATARATA EN OTRAS ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H288' => 'OTROS TRASTORNOS DEL CRISTALINO EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H300' => 'CORIORRETINITIS FOCAL',
        'H301' => 'CORIORRETINITIS DISEMINADA',
        'H302' => 'CICLITIS POSTERIOR',
        'H308' => 'OTRAS CORIORRETINITIS',
        'H309' => 'CORIORRETINITIS, NO ESPECIFICADA',
        'H310' => 'CICATRICES CORIORRETINIANAS',
        'H311' => 'DESGENERACION COROIDEA',
        'H312' => 'DISTROFIA COROIDEA HEREDITARIA',
        'H313' => 'HEMORRAGIA Y RUPTURA DE LA COROIDES',
        'H314' => 'DESPRENDIMIENTO DE LA COROIDES',
        'H318' => 'OTROS TRASTORNOS ESPECIFICADOS DE LA COROIDES',
        'H319' => 'TRASTORNO DE LA COROIDES, NO ESPECIFICADO',
        'H320' => 'INFLAMACION CORIORRETINIANA EN ENFERMEDADES INFECCIOSAS Y PARASITARIAS CLASIFICADAS EN OTRA PARTE',
        'H328' => 'OTROS TRASTORNOS CORIORRETINIANOS EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H330' => 'DESPRENDIMIENTO DE LA RETINA CON RUPTURA',
        'H331' => 'RETINOSQUISIS Y QUISTES DE LA RETINA',
        'H332' => 'DESPRENDIMIENTO SEROSO DE LA RETINA',
        'H333' => 'DESGARRO DE LA RETINA SIN DESPRENDIMIENTO',
        'H334' => 'DESPRENDIMIENTO DE LA RETINA POR TRACCION',
        'H335' => 'OTROS DESPRENDIMIENTO DE LA RETINA',
        'H340' => 'OCLUSION ARTERIAL TRANSITORIA DE LA RETINA',
        'H341' => 'OCLUSION DE LA ARTERIA CENTRAL DE LA RETINA',
        'H342' => 'OTRAS FORMAS DE OCLUSION DE LA ARTERIA DE LA RETINA',
        'H348' => 'OTRAS OCLUSIONES VASCULARES RETINIANAS',
        'H349' => 'OCLUSION VASCULAR RETINIANA, SIN OTRA ESPECIFICACION',
        'H350' => 'RETINOPATIAS DEL FONDO Y CAMBIOS VASCULARES RETINIANOS',
        'H351' => 'RETINOPATIA DE LA PREMATURIDAD',
        'H352' => 'OTRAS RETINOPATIAS PROLIFERATIVAS',
        'H353' => 'DEGENERACION DE LA MACULA Y DEL POLO POSTERIOR DEL OJO',
        'H354' => 'DEGENERACION PERIFERICA DE LA RETINA',
        'H355' => 'DISTROFIA HEREDITARIA DE LA RETINA',
        'H356' => 'HEMORRAGIA RETINIANA',
        'H357' => 'SEPARACION DE LAS CASPAS DE LA RETINA',
        'H358' => 'OTROS TRASTORNOS ESPECIFICADOS DE LA RETINA',
        'H359' => 'TRASTORNO DE LA RETINA, NO ESPECIFICADO',
        'H360' => 'RETINOPATIA DIABETICA (E10-E14† CON CUARTO CARACTER COMUN .3)',
        'H368' => 'OTROS TRASTORNOS DE LA RETINA EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H400' => 'SOSPECHA DE GLAUCOMA',
        'H401' => 'GLAUCOMA PRIMARIO DE ANGULO ABIERTO',
        'H402' => 'GLAUCOMA PRIMARIO DE ANGULO CERRADO',
        'H403' => 'GLAUCOMA SECUNDARIO A TRAUMATISMO OCULAR',
        'H404' => 'GLAUCOMA SECUNDARIO A INFLAMACION OCULAR',
        'H405' => 'GLAUCOMA SECUNDARIO A OTROS TRASTORNOS DEL OJO',
        'H406' => 'GLAUCOMA SECUNDARIO A DROGAS',
        'H408' => 'OTROS GLAUCOMAS',
        'H409' => 'GLAUCOMA, NO ESPECIFICADO',
        'H420' => 'GLAUCOMA EN ENFERMEDADES ENDOCRINAS, NUTRICIONALES Y METABOLICAS, CLASIFICADAS EN OTRA PARTE',
        'H428' => 'GLAUCOMA EN OTRAS ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H430' => 'PROLAPSO DEL VITREO',
        'H431' => 'HEMORRAGIA DEL VITREO',
        'H432' => 'DEPOSITOS CRISTALINOS EN EL CUERPO VITREO',
        'H433' => 'OTRAS OPACIDADES VITREAS',
        'H438' => 'OTROS TRASTORNOS DEL CUERPO VITREO',
        'H439' => 'TRASTORNOS DEL CUERPO VITREO, NO ESPECIFICADO',
        'H440' => 'ENDOFTALMITIS PURULENTA',
        'H441' => 'OTRAS ENDOFTALMITIS',
        'H442' => 'MIOPIA DEGENERATIVA',
        'H443' => 'OTROS TRASTORNOS DEGENERATIVOS DEL GLOBO OCULAR',
        'H444' => 'HIPOTONIA OCULAR',
        'H445' => 'AFECCIONES DEGENERATIVAS DEL GLOBO OCULAR',
        'H446' => 'RETENCION INTRAOCULAR DE CUERPO EXTRAÑO MAGNETICO (ANTIGUO)',
        'H447' => 'RETENCION INTRAOCULAR DE CUERPO EXTRAÑO NO MAGNETICO (ANTIGUO)',
        'H448' => 'OTROS TRASTORNOS DEL GLOBO OCULAR',
        'H449' => 'TRASTORNO DEL GLOBO OCULAR, NO ESPECIFICADO',
        'H450' => 'HEMORRAGIA DEL VITREO EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H451' => 'ENDOFTALMITIS EN ENFERNEDADES CLASIFICADAS EN OTRA PARTE',
        'H458' => 'OTROS TRASTORNOS DEL CUERPO VITREO Y DEL GLOBO OCULAR EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H46X' => 'NEURITIS OPTICA',
        'H470' => 'TRASTORNOS DEL NERVIO OPTICO, NO CLASIFICADOS EN OTRA PARTE',
        'H471' => 'PAPILEDEMA, NO ESPECIFICADO',
        'H472' => 'ATROFIA OPTICA',
        'H473' => 'OTROS TRASTORNOS DEL DISCO OPTICO',
        'H474' => 'TRASTORNOS DEL QUIASMA OPTICO',
        'H475' => 'TRASTORNOS DE OTRAS VIAS OPTICAS',
        'H476' => 'TRASTORNOS DE LA CORTEZA VISUAL',
        'H477' => 'TRASTORNOS DE LAS VIAS OPTICAS, NO ESPECIFICADO',
        'H480' => 'ATROFIA OPTICA EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H481' => 'NEURITIS RETROBULBAR EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H488' => 'OTROS TRASTORNOS DEL NERVIO OPTICO Y DE LAS VIAS OPTICAS EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H490' => 'PARALISIS DEL NERVIO MOTOR OCULAR COMUN [III PAR]',
        'H491' => 'PARALISIS DEL NERVIO PATETICO [IV PAR]',
        'H492' => 'PARALISIS DEL NERVIO MOTOR OCULAR EXTERNO [VI PAR]',
        'H493' => 'OFTALMOPLEJIA TOTAL (EXTERNA)',
        'H494' => 'OFTALMOPLEJIA EXTERNA PROGRESIVA',
        'H498' => 'OTROS ESTRABISMOS PARALITICOS',
        'H499' => 'ESTRABISMO PARALITICO, NO ESPECIFICADO',
        'H500' => 'ESTRABISMO CONCOMITANTE CONVERGENTE',
        'H501' => 'ESTRABISMO CONCOMITANTE DIVERGENTE',
        'H502' => 'ESTRABISMO VERTICAL',
        'H503' => 'HETEROTROPIA INTERMITENTE',
        'H504' => 'OTRAS HETEROTROPIAS O LAS NO ESPECIFICADAS',
        'H505' => 'HETEROFORIA',
        'H506' => 'ESTRABISMO MECANICO',
        'H508' => 'OTROS ESTRABISMOS ESPECIFICADOS',
        'H509' => 'ESTRABISMO, NO ESPECIFICADO',
        'H510' => 'PARALISIS DE LA CONJUGACION DE LA MIRADA',
        'H511' => 'EXCESO E INSUFICIENCIA DE LA CONVERGENCIA OCULAR',
        'H512' => 'OFTALMOPLEJIA INTERNUCLEAR',
        'H518' => 'OTROS TRASTORNOS ESPECIFICADOS DE LOS MOVIMIENTOS BINOCULARES',
        'H519' => 'TRASTORNOS DEL MOVIMIENTO BINOCULAR, NO ESPECIFICADO',
        'H520' => 'HIPERMETROPIA',
        'H521' => 'MIOPIA',
        'H522' => 'ASTIGMATISMO',
        'H523' => 'ANISOMETROPIA Y ANISEICONIA',
        'H524' => 'PRESBICIA',
        'H525' => 'TRASTORNOS DE LA ACOMODACION',
        'H526' => 'OTROS TRASTORNOS DE LA REFRACCION',
        'H527' => 'TRASTORNO DE LA REFRACCION, NO ESPECIFICADO',
        'H530' => 'AMBLIOPIA EX ANOPSIA',
        'H531' => 'ALTERACIONES VISUALES SUBJETIVAS',
        'H532' => 'DIPLOPIA',
        'H533' => 'OTROS TRASTORNOS DE LA VISION BINOCULAR',
        'H534' => 'DEFECTOS DEL CAMPO VISUAL',
        'H535' => 'DEFICIENCIAS DE LA VISION CROMATICA',
        'H536' => 'CEGUERA NOCTURNA',
        'H538' => 'OTRAS ALTERACIONES VISUALES',
        'H539' => 'ALTERACION VISUAL, NO ESPECIFICADA',
        'H540' => 'CEGUERA DE AMBOS OJOS',
        'H541' => 'CEGUERA DE UN OJO, VISION SUBNORMAL DEL OTRO',
        'H542' => 'VISION SUBNORMAL DE AMBOS OJOS',
        'H543' => 'DISMINUCION INDETERMINADA DE LA AGUDEZA VISUAL EN AMBOS OJOS',
        'H544' => 'CEGUERA DE UN OJO',
        'H545' => 'VISION SUBNORMAL DE UN OJO',
        'H546' => 'DISMINUCION INDETERMINADA DE LA AGUDEZA VISUAL DE UN OJO',
        'H547' => 'DISMINUCION DE LA AGUDEZA VISUAL, SIN ESPECIFICACION',
        'H55X' => 'NISTAGMO Y OTROS MOVIMIENTOS OCULARES IRREGULARES',
        'H570' => 'ANOMALIAS DE LA FUNCION PUPILAR',
        'H571' => 'DOLOR OCULAR',
        'H578' => 'OTROS TRASTORNOS ESPECIFICADOS DEL OJO Y SUS ANEXOS',
        'H579' => 'TRASTORNO DEL OJO Y SUS ANEXOS, NO ESPECIFICADO',
        'H580' => 'ANOMALIAS DE LA FUNCION PUPILAR EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H581' => 'ALTERACIONES DE LA VISION EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H588' => 'OTROS TRASTORNOS ESPECIFICADOS DEL OJO EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H590' => 'SINDROME VITREO CONSECUTIVO A CIRUGIA DE CATARATA',
        'H598' => 'OTROS TRASTORNOS DEL OJO Y SUS ANEXOS, CONSECUTIVOS A PROCEDIMIENTOS',
        'H599' => 'TRASTORNO NO ESPECIFICADO DEL OJO Y SUS ANEXOS, CONSECUTIVO A PROCEDIMIENTOS',
        'H600' => 'ABSCESO DEL OIDO EXTERNO',
        'H601' => 'CELULITIS DEL OIDO EXTERNO',
        'H602' => 'OTITIS EXTERNA MALIGNA',
        'H603' => 'OTRAS OTITIS EXTERNAS INFECCIOSAS',
        'H604' => 'COLESTEATOMA DEL OIDO EXTERNO',
        'H605' => 'OTITIS EXTERNA AGUDA, NO INFECCIOSA',
        'H608' => 'OTRAS OTITIS EXTERNAS',
        'H609' => 'OTITIS EXTERNA, SIN OTRA ESPECIFICACION',
        'H610' => 'PERICONDRITIS DEL OIDO EXTERNO',
        'H611' => 'AFECCIONES NO INFECCIOSAS DEL PABELLON AUDITIVO',
        'H612' => 'CERUMEN IMPACTADO',
        'H613' => 'ESTENOSIS ADQUIRIDA DEL CONDUCTO AUDITIVO EXTERNO',
        'H618' => 'OTROS TRASTORNOS ESPECIFICADOS DEL OIDO EXTERNO',
        'H619' => 'TRASTORNO DEL OIDO EXTERNO, NO ESPECIFICADO',
        'H620' => 'OTITIS EXTERNA EN ENFERMEDADES BACTERIANAS CLASIFICADAS EN OTRA PARTE',
        'H621' => 'OTITIS EXTERNA EN ENFERMEDADES VIRALES CLASIFICADAS EN OTRA PARTE',
        'H622' => 'OTITIS EXTERNA EN MICOSIS',
        'H623' => 'OTITIS EXTERNA EN OTRAS ENFERMEDADES INFECCIOSAS Y PARASITARIAS CLASIFICADAS EN OTRA PATE',
        'H624' => 'OTITIS EXTERNA EN OTRAS ENFERMEDADES CLASIFICADAS EN OTRA PATE',
        'H628' => 'OTROS TRASTORNOS DEL OIDO EXTERNO EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H650' => 'OTITIS MEDIA AGUDA SEROSA',
        'H651' => 'OTRA OTITIS MEDIA AGUDA, NO SUPURATIVA',
        'H652' => 'OTITIS MEDIA CRONICA SEROSA',
        'H653' => 'OTITIS MEDIA CRONICA MUCOIDE',
        'H654' => 'OTRAS OTITIS MEDIAS CRONICAS NO SUPURATIVAS',
        'H659' => 'OTITIS MEDIA NO SUPURATIVA, SIN OTRA ESPECIFICACION',
        'H660' => 'OTITIS MEDIA SUPURATIVA AGUDA',
        'H661' => 'OTITIS MEDIA TUBOTIMPANICA SUPURATIVA CRONICA',
        'H662' => 'OTITIS MEDIA SUPURATIVA CRONICA ATICOANTRAL',
        'H663' => 'OTRAS OTITIS MEDIAS CRONICAS SUPURATIVAS',
        'H664' => 'OTITIS MEDIA SUPURATIVA, SIN OTRA ESPECIFICACION',
        'H669' => 'OTITIS MEDIA, NO ESPECIFICADA',
        'H670' => 'OTITIS MEDIA EN ENFERMEDADES BACTERIANAS CLASIFICADAS EN OTRA PARTE',
        'H671' => 'OTITIS MEDIA EN ENFERMEDADES VIRALES CLASIFICADAS EN OTRA PARTE',
        'H678' => 'OTITIS MEDIA EN OTRAS ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H680' => 'SALPINGITIS EUSTAQUIANA',
        'H681' => 'OBSTRUCCION DE LA TROMPA DE EUSTAQUIO',
        'H690' => 'DISTENSION DE LA TROMPA DE EUSTAQUIO',
        'H698' => 'OTROS TRASTORNOS ESPECIFICADOS DE LA TROMPA DE EUSTAQUIO',
        'H699' => 'TRASTORNO DE LA TROMPA DE EUSTAQUIO, NO ESPECIFICADO',
        'H700' => 'MASTOIDITIS AGUDA',
        'H701' => 'MASTOIDITIS CRONICA',
        'H702' => 'PETROSITIS',
        'H708' => 'OTRAS MASTOIDITIS Y AFECCIONES RELACIONADAS',
        'H709' => 'MASTOIDITIS, NO ESPECIFICADA',
        'H71X' => 'COLESTEATOMA DEL OIDO MEDIO',
        'H720' => 'PERFORACION CENTRAL DE LA MEMBRANA TIMPANICA',
        'H721' => 'PERFORACION ATICA DE LA MEMBRANA TIMPANICA',
        'H722' => 'OTRAS PERFORACIONES MARGINALES DE LA MEMBRANA TIMPANICA',
        'H728' => 'OTRAS PERFORACIONES DE LA MEMBRANA TIMPANICA',
        'H729' => 'PERFORACION DE LA MEMBRANA TIMPANICA, SIN OTRA ESPECIFICACION',
        'H730' => 'MIRINGITIS AGUDA',
        'H731' => 'MIRINGITIS CRONICA',
        'H738' => 'OTROS TRASTORNOS ESPECIFICADOS DE LA MEMBRANA TIMPANICA',
        'H739' => 'TRASTORNO DE LA MEMBRANA TIMPANICA, NO ESPECIFICADO',
        'H740' => 'TIMPANOSCLEROSIS',
        'H741' => 'ENFERMEDAD ADHESIVA DEL OIDO MEDIO',
        'H742' => 'DISCONTINUIDAD Y DISLOCACION DE LOS HUESECILLOS DEL OIDO',
        'H743' => 'OTRAS ANORMALIDADES ADQUIRIDAS DE LOS HUESECILLOS DEL OIDO',
        'H744' => 'POLIPO DEL OIDO MEDIO',
        'H748' => 'OTROS TRASTORNOS ESPECIFICADOS DEL OIDO MEDIO Y DE LA APOFISIS MASTOIDES',
        'H749' => 'TRASTORNO DEL OIDO MEDIO Y DE LA APOFISIS MASTOIDES, NO ESPECIFICADO',
        'H750' => 'MASTOIDITIS EN ENFERMEDADES INFECCIOSAS Y PARASITARIAS CLASIFICADAS EN OTRA PARTE',
        'H758' => 'OTROS TRASTORNOS ESPECIFICADOS DEL OIDO MEDIO Y DE LA APOFISIS MASTOIDES EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H800' => 'OTOSCLEROSIS QUE AFECTA LA VENTANA OVAL, NO OBLITERANTE',
        'H801' => 'OTOSCLEROSIS QUE AFECTA LA VENTANA OVAL, OBLITERANTE',
        'H802' => 'OSTOSCLEROSIS COCLEAR',
        'H808' => 'OTRAS OTOSCLEROSIS',
        'H809' => 'OTOSCLEROSIS, NO ESPECIFICADA',
        'H810' => 'ENFERMEDAD DE MENIERE',
        'H811' => 'VERTIGO PAROXISTICO BENIGNO',
        'H812' => 'NEURONITIS VESTIBULAR',
        'H813' => 'OTROS VERTIGOS PERIFERICOS',
        'H814' => 'VERTIGO DE ORIGEN CENTRAL',
        'H818' => 'OTROS TRASTORNOS DE LA FUNCION VESTIBULAR',
        'H819' => 'TRASTORNO DE LA FUNCION VESTIBULAR, NO ESPECIFICADO',
        'H82X' => 'SINDROMES VERTIGINOSOS EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H830' => 'LABERINTITIS',
        'H831' => 'FISTULA DEL LABERINTO',
        'H832' => 'DISFUNCION DEL LABERINTO',
        'H833' => 'EFECTOS DEL RUIDO SOBRE EL OIDO INTERNO',
        'H838' => 'OTROS TRASTORNOS ESPECIFICADOS DEL OIDO INTERNO',
        'H839' => 'TRASTORNO DEL OIDO INTERNO, NO ESPECIFICADO',
        'H900' => 'HIPOACUSIA CONDUCTIVA BILATERAL',
        'H901' => 'HIPOACUSIA CONDUCTIVA, UNILATERAL CON AUDICION IRRESTRICTA CONTRALATERAL',
        'H902' => 'HIPOACUSIA CONDUCTIVA, SIN OTRA ESPECIFICACION',
        'H903' => 'HIPOACUSIA NEUROSENSORIAL, BILATERAL',
        'H904' => 'HIPOACUSIA NEUROSENSORIAL, UNILATERAL CON AUDICION IRRESTRICTA CONTRALATERAL',
        'H905' => 'HIPOACUSIA NEUROSENSORIAL, SIN OTRA ESPECIFICACION',
        'H906' => 'HIPOACUSIA MIXTA CONDUCTIVA Y NEUROSENSORIAL, BILATERAL',
        'H907' => 'HIPOACUSIA MIXTA CONDUCTIVA Y NEUROSENSORIAL, UNILATERAL CON AUDICION IRRESTRICTA CONTRALATERAL',
        'H908' => 'HIPOACUSIA MIXTA CONDUCTIVA Y NEUROSENSORIAL, NO ESPECIFICADA',
        'H910' => 'HIPOACUSIA OTOTOXICA',
        'H911' => 'PRESBIACUSIA',
        'H912' => 'HIPOACUSIA SUBIDA IDIOPATICA',
        'H913' => 'SORDOMUDEZ, NO CLASIFICADA EN OTRA PARTE',
        'H918' => 'OTRAS HIPOACUSIAS ESPECIFICADAS',
        'H919' => 'HIPOACUSIA, NO ESPECIFICADA',
        'H920' => 'OTALGIA',
        'H921' => 'OTORREA',
        'H922' => 'OTORRAGIA',
        'H930' => 'TRASTORNOS DEGENERATIVOS Y VASCULARES DEL OIDO',
        'H931' => 'TINNITUS',
        'H932' => 'OTRAS PERCEPCIONES AUDITIVAS ANORMALES',
        'H933' => 'TRASTORNOS DEL NERVIO AUDITIVO',
        'H938' => 'OTROS TRASTORNOS ESPECIFICADOS DEL OIDO',
        'H939' => 'TRASTORNO DEL OIDO, NO ESPECIFICADO',
        'H940' => 'NEURITIS DEL NERVIO AUDITIVO EN ENFERMEDADES INFECCIOSAS Y PARASITARIAS CLASIFICADAS EN OTRA PARTE',
        'H948' => 'OTROS TRASTORNOS DEL OIDO EN ENFERMEDADES CLASIFICADAS EN OTRA PARTE',
        'H950' => 'COLESTEATOMA RECURRENTE DE LA CAVIDAD RESULTANTE DE LA MASTOIDECTOMIA',
        'H951' => 'OTROS TRASTORNOS POSTERIORES A LA MASTOIDECTOMIA',
        'H958' => 'OTROS TRASTORNOS DEL OIDO Y DE LA APOFISIS MASTOIDES, CONSECUTIVOS A PROCEDIMIENTOS',
        'H959' => 'TRASTORNOS NO ESPECIFICADOS DEL OIDO Y DE LA APOFISIS MASTOIDES, CONSECUTIVOS A PROCEDIMIENTOS'
    ],

];