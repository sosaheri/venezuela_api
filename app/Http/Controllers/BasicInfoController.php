<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicInfoController extends Controller
{
    public function info()
    {
        return response()->json(
            [
            "name" => "República Bolivariana de Venezuela",
            "description"=> "Venezuela, es un país soberano situado en la parte septentrional de América del Sur y el Caribe, constituido por un área continental y por un gran número de islas e islotes en el mar Caribe, cuya capital y mayor aglomeración urbana es la ciudad de Caracas.​

Posee una extensión territorial de 916 445 km². El territorio continental limita al norte con el mar Caribe y el océano Atlántico, al oeste con Colombia, al sur con Brasil y por el este con Guyana. Con este último país, el Estado venezolano mantiene una reclamación sobre 159 542 km² de territorio al oeste del río Esequibo, esta área es conocida como Guayana Esequiba o Zona en Reclamación6​, anteriormente bajo el control de Guayana Neerlandesa. Por sus espacios marítimos, ejerce soberanía sobre 71 295 km² de mar territorial,7​ 22 224 km² en su zona contigua,7​ 471 507 km² del mar Caribe y del océano Atlántico bajo el concepto de zona económica exclusiva,8​9​10​ y 99 889 km² de plataforma continental.​ Esta zona marina limita con las de trece Estados.11​ El país tiene una biodiversidad muy alta y ocupa el séptimo lugar en la lista mundial de naciones con mayor cantidad de especies. Existen hábitats que van desde las montañas de los Andes en occidente hasta la selva tropical de la cuenca del Orinoco en el sur, a través de las extensas planicies de los Llanos, la costa del Caribe y el delta del río Orinoco en el oriente.

El territorio ahora conocido como Venezuela fue colonizado por España en 1522, en medio de la resistencia de los pueblos amerindios. En 1811, Venezuela se convirtió en uno de los primeros territorios hispanoamericanos en declarar su independencia de España. La lucha por la independencia fue liderada por figuras como Francisco de Miranda, Simón Bolívar y José Antonio Páez, quienes encabezaron varias campañas militares contra las fuerzas coloniales españolas. En 1821, las fuerzas independentistas lideradas por Bolívar lograron la victoria decisiva en la Batalla de Carabobo, lo que permitió la consolidación de la independencia de Venezuela y de otros países que conformaban la Gran Colombia, la unión no duró mucho tiempo y la Gran Colombia se disolvió en 1830, dejando a Venezuela como un país independiente. Venezuela sufrió la agitación política y la autocracia y permaneció dominada por caudillos regionales hasta principios del siglo xx. Desde 1958, el país ha tenido una serie de gobiernos democráticos. La recesión económica en los años 80 y 90 llevó a varias crisis políticas, incluidos los mortales disturbios del Caracazo en 1989, dos intentos de golpe de Estado en 1992 y el juicio político al presidente Carlos Andrés Pérez por malversación de fondos públicos en 1993. Un colapso en la confianza a los partidos políticos existentes llevaron a la elección en 1998 del exoficial de carrera Hugo Chávez, implicado en el golpe, y el inicio de lo que llamó la Revolución bolivariana. Chávez comenzó su gobierno convocando a una asamblea constituyente en 1999, donde se redactó una nueva Constitución que cambiaría el nombre oficial del país a República Bolivariana de Venezuela.

Para 2010, Venezuela tenía las reservas petroleras más grandes del mundo y era uno de los principales exportadores mundiales de petróleo.​ Antes de la explotación del petróleo, el país era un exportador de productos agrícolas, como café y cacao, pero el petróleo rápidamente alcanzó a dominar las exportaciones y los ingresos del país. La sobreoferta mundial de petróleo en los años 80 condujo a una crisis de la deuda externa y a una prolongada crisis económica. La inflación se disparó en 1996 y las tasas de pobreza aumentaron al 66 % en 1995. Para 1998 el PIB per cápita cayó al mismo nivel que en 1963, una tercera parte de su máximo, alcanzado en 1978. El gobierno de Hugo Chávez se caracterizó por su ideología antiimperialista y un cambio en la geopolítica del mercado petrolero buscando nuevos mercados​ y apoyando a países carentes del recurso petrolero, se incrementó el gasto público con la teoría de distribuir la riqueza y creció la deuda externa a más de 118 000 millones de dólares de manera descontrolada​ que a pesar de tener un boom petrolero las consecuencias se notarían años después​ el ingreso de divisas que se invirtieron en gran parte en políticas de bienestar social, mientras la producción nacional venezolana se vio estancada durante los primeros años de su gobierno, aumentando el gasto social y temporalmente reduciendo la pobreza y la desigualdad económica, gracias en gran medida al aumento de los precios del petróleo que favorecieron el aumento de los ingresos del país.",
            "stateCapital"=> "Caracas",
            "surface"=> 916445,
            "population"=> 35634762,
            "languages"=> [
            "Español"
            ],
            "timeZone"=> "UTC-4",
            "currency"=> "Bolivar",
            "currencyCode"=> "VEF",
            "isoCode"=> "VEF",
            "internetDomain"=> ".ve",
            "phonePrefix"=> "+58",
            "radioPrefix"=> "YVA-YYZ/4MA-4MZ",
            "aircraftPrefix"=> "YVA",
            "states"=> 23,
            "presidents"=> 51
            ]
        );
    }
}
