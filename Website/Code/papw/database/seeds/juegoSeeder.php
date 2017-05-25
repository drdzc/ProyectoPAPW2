<?php

use Illuminate\Database\Seeder;

class juegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('juego')->insert([
          ['titulo' => 'Horizon: Zero Dawn', 'descripcion' => ' El juego se ambienta en un mundo abierto en el que la naturaleza ha reclamado las ruinas de una civilización olvidada y la humanidad ya no es la especie dominante, sino unas avanzadas maquinas de origen desconocido.', 'urlPortada' => '/Juegos/HZD.jpg', 'fechaLanzamiento' => '2017-03-01', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'PS4', 'idGenero'=>1, 'idGenero2' => 2],

          ['titulo' => 'Uncharted 4', 'descripcion' => 'Varios años después de su última aventura, el retirado cazador de fortunas, Nathan Drake, es obligado a regresar al mundo de los ladrones.', 'urlPortada' => '/Juegos/U4.jpg', 'fechaLanzamiento' => '2016-05-10', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'PS4', 'idGenero'=>1, 'idGenero2' => 2],

          ['titulo' => 'The Last Guardian', 'descripcion' => 'Un viaje inolvidable. Vive el poder de la amistad entre un chico y su místico compañero en uno de los títulos más esperados de la década, del creador de Ico y Shadow of the Colossus.', 'urlPortada' => '/Juegos/TLG.jpg', 'fechaLanzamiento' => '2016-12-06', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'PS4', 'idGenero'=>1, 'idGenero2' => 2],

          ['titulo' => 'Gran Turismo Sport', 'descripcion' => 'Gran Turismo Sport es la primera experiencia de carreras automovilísticas diseñada para participar en competencias globales en línea, sancionadas por el máximo organismo rector del automovilismo internacional, la FIA (Federación Internacional de Automovilismo).', 'urlPortada' => '/Juegos/GTS.jpg', 'fechaLanzamiento' => '2016-11-15', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'PS4', 'idGenero'=>3, 'idGenero2' => 4],

          ['titulo' => 'Nioh', 'descripcion' => 'En Nioh, los jugadores atravesarán Japón, devastado por la guerra, como William, un rubio espadachín cuyos antecedentes como feroz guerrero y cuya vasta experiencia con la espada le permitirán sobrevivir en la tierra de los samuráis, plagada de demonios.', 'urlPortada' => '/Juegos/NIOH.jpg', 'fechaLanzamiento' => '2017-02-08', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'PS4', 'idGenero'=>1, 'idGenero2' => 8],

          ['titulo' => 'Bloodborne', 'descripcion' => 'Enfrenta tus miedos mientras buscas las respuestas en la antigua ciudad de Yharnam, ahora maldecida con una extraña enfermedad endémica que se propaga por las calles como el fuego.', 'urlPortada' => '/Juegos/BB.jpg', 'fechaLanzamiento' => '2015-03-26', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'PS4', 'idGenero'=>1, 'idGenero2' => 8],

          ['titulo' => 'Until Dawn', 'descripcion' => 'Ocho amigos atrapados juntos en un refugio de montaña remota… y no están solos.', 'urlPortada' => '/juegos/UD.jpg', 'fechaLanzamiento' => '2015-08-25', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'PS4', 'idGenero'=>11, 'idGenero2' => null],

          ['titulo' => 'The Last of Us', 'descripcion' => 'Veinte años después de que una pandemia cambiara radicalmente la civilización tal como la conocemos, los humanos infectados corren salvajemente por todos lados y los sobrevivientes se matan entre sí para obtener alimentos, armas, y lo que puedan encontrar. Joel, un violento sobreviviente, es contratado para rescatar a Ellie, una niña de 14 años, de una opresiva zona militar en cuarentena. Sin embargo, lo que comienza como un trabajo menor pronto se transforma en un viaje brutal a través de EE. UU.', 'urlPortada' => '/Juegos/TLOU.jpg', 'fechaLanzamiento' => '2013-06-14', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'PS4', 'idGenero'=>1, 'idGenero2' => 11],



          ['titulo' => 'Gears of War 4', 'descripcion' => 'Comienza una nueva saga para una de las franquicias de videojuegos más aclamadas de la historia. Tras escapar por muy poco de un ataque a su pueblo, JD Fenix y sus amigos, Kait y Del, deben rescatar a sus seres queridos y descubrir el origen de su monstruoso enemigo. ', 'urlPortada' => '/Juegos/GOW4.jpg', 'fechaLanzamiento' => '2016-10-11', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Xbox One', 'idGenero'=>10, 'idGenero2' => null],

          ['titulo' => 'Quantum Break', 'descripcion' => 'Cuando el tiempo se rompe, la catástrofe se convierte en tu zona de juego. Serás el héroe Jack Joyce y te abrirás paso entre desastres épicos con retrocesos y avances en el tiempo. Para sobrevivir en este mundo inestable y conseguir que el tiempo no se pare tendrás que dominar tus nuevos poderes temporales.', 'urlPortada' => '/Juegos/QB.jpg', 'fechaLanzamiento' => '2016-04-05', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Xbox One', 'idGenero'=>1, 'idGenero2' => 10],

          ['titulo' => 'Halo Wars 2', 'descripcion' => 'Un enemigo completamente nuevo amenaza el universo de Halo y lo único que está entre el Armagedón y la humanidad es el coraje de la tripulación dentro del Spirit of Fire.', 'urlPortada' => '/Juegos/HW2.png', 'fechaLanzamiento' => '2017-02-21', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Xbox One', 'idGenero'=>5, 'idGenero2' => null],

          ['titulo' => 'Forza Horizon 3', 'descripcion' => 'Estás a cargo del Festival Horizon. Personaliza todo, contrata y despide a tus amigos y explora Australia con los más de 350 automóviles más increíbles del mundo. Haz de Horizon la celebración definitiva de autos, música y libertad de la carretera. Cómo llegues ahí depende de ti.', 'urlPortada' => '/Juegos/FH.jpg', 'fechaLanzamiento' => '2016-09-27', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Xbox One', 'idGenero'=>3, 'idGenero2' => 4],



          ['titulo' => '1-2 Switch', 'descripcion' => 'No mires a la pantalla, ¡mira a tu rival!. Extrae los mandos Joy-Con de la consola, dale uno a tu rival y… ¡que comience la diversión!', 'urlPortada' => '/Juegos/12S.jpg', 'fechaLanzamiento' => '2017-03-03', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Switch', 'idGenero'=>9, 'idGenero2' => null],

          ['titulo' => 'Mario Kart 8 Deluxe', 'descripcion' => 'Mario Kart ha sido siempre sinónimo de diversión y calidad, encontrando en la octava entrega a uno de sus mejores representantes. Ahora, con el lanzamiento de Switch, la compañía nipona ha decidido publicar una versión Deluxe que incluye el título original, todo su contenido descargable y novedades muy interesantes, sin olvidarnos de las nuevas opciones jugables que ofrece la portátil de Nintendo, tanto en solitario como con amigos. ', 'urlPortada' => '/Juegos/MK.jpg', 'fechaLanzamiento' => '2017-04-28', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Switch', 'idGenero'=>3, 'idGenero2' => null],

          ['titulo' => 'Super Bomberman R', 'descripcion' => 'Super Bomberman R es un juego de acción en el que los jugadores se mueven a través de un entorno bidimensional y deben lanzar bombas para derrotar sus adversarios.', 'urlPortada' => '/Juegos/BM.png', 'fechaLanzamiento' => '2017-03-03', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Switch', 'idGenero'=>1, 'idGenero2' => null],

          ['titulo' => 'The Legend of Zelda: Breath of the Wild', 'descripcion' => 'Olvida todo lo que sabes sobre los juegos de The Legend of Zelda. Entra en un mundo de descubrimientos, exploración y aventura en The Legend of Zelda: Breath of the Wild, un nuevo juego de la aclamada serie que rompe con las convenciones. Viaja por prados, bosques y cumbres montañosas para descubrir qué ha sido del asolado reino de Hyrule en esta maravillosa aventura a cielo abierto.', 'urlPortada' => '/Juegos/TLOZ.png', 'fechaLanzamiento' => '2017-03-03', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Switch', 'idGenero'=>2, 'idGenero2' => 6],

          ['titulo' => 'Splatoon 2', 'descripcion' => 'Lucha por la supremacía territorial cuando quieras, donde quieras y como quieras en Splatoon 2, solo para Nintendo Switch.', 'urlPortada' => '/Juegos/SP2.jpg', 'fechaLanzamiento' => '2017-07-21', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Switch', 'idGenero'=>10, 'idGenero2' => null],

          ['titulo' => 'Ultra Street Fighter II', 'descripcion' => 'Reaviva tu espíritu luchador con un clásico donde los haya: ULTRA STREET FIGHTER II: The Final Challengers, solo en Nintendo Switch. ', 'urlPortada' => '/Juegos/SF.jpg', 'fechaLanzamiento' => '2017-05-26', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Switch', 'idGenero'=>1, 'idGenero2' => 12],




          ['titulo' => 'For Honor', 'descripcion' => 'Vive el caos, la furia y la brutalidad de la batalla, en la que tu y tus amigos dejaran un reguero de destruccion en el papel de vikingos despiadados, caballeros letales y samurais imperturbables.', 'urlPortada' => '/Juegos/FHO.jpg', 'fechaLanzamiento' => '2017-02-14', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Multiplataforma', 'idGenero'=>1, 'idGenero2' => null],

          ['titulo' => 'Mass Effect: Andromeda', 'descripcion' => 'Embárcate en una misión más allá de los límites del universo conocido. Muévete por los confines inexplorados de la galaxia de Andrómeda para desvelar sus misterios, descubre vívidos mundos alienígenas y lidera la carga para encontrar un nuevo hogar para la humanidad entre las estrellas.', 'urlPortada' => '/Juegos/MEA.jpg', 'fechaLanzamiento' => '2017-03-23', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Switch', 'idGenero'=>8, 'idGenero2' => 1],

          ['titulo' => 'Prey', 'descripcion' => 'Alienígens hostiles han invadido la estación espacial Talos I y debes usar alucinantes poderes y armas únicas para decidir el destino de la humanidad.', 'urlPortada' => '/Juegos/PREY.jpg', 'fechaLanzamiento' => '2017-05-05', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Multiplataforma', 'idGenero'=>10, 'idGenero2' => 1],

          ['titulo' => 'Outlast 2', 'descripcion' => 'En la piel del experto en imagen Blacke Langermann, en Outlast 2 debes rescatar a tu compañera de fatigas, la periodista Lynn, que ha caído en manos de una secta de locos que no van a dudar ni un instante en acabar con tu vida. ', 'urlPortada' => '/Juegos/OU2.png', 'fechaLanzamiento' => '2017-04-25', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Multiplataforma', 'idGenero'=>11, 'idGenero2' => null],

          ['titulo' => 'Dark Souls III', 'descripcion' => 'Situado en el Reino de Lothric, el jugador tiene la tarea de sobrevivir a un apocalipsis que se aproxima, provocado por el conflicto entre la Edad de Fuego y aquellos marcados con la Señal oscura.', 'urlPortada' => '/Juegos/DS3.jpg', 'fechaLanzamiento' => '2016-03-24', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Multiplataforma', 'idGenero'=>8, 'idGenero2' => 1],

          ['titulo' => 'Doom', 'descripcion' => 'En tu lucha contra las hordas demoníacas del infierno, no podrás buscar cobertura o parar para regenerar tu salud. Combina tu arsenal de armas convencionales y futuristas, tus mejoras, tu movilidad y un avanzado sistema de cuerpo a cuerpo para derribar, acuchillar, pisotear, aplastar y destruir a los demonios de forma violenta y creativa.', 'urlPortada' => '/Juegos/DOOM.jpg', 'fechaLanzamiento' => '2016-03-05', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Multiplataforma', 'idGenero'=>1, 'idGenero2' => 10],

          ['titulo' => 'Grand Theft Auto V', 'descripcion' => 'La historia transcurre en la remodelada ciudad de Los Santos, donde Michael, Trevor y Franklin trabajan individualmente hasta que se cruzan sus vidas y empiezan a trabajar en equipo robando bancos o realizando trabajos para diversos personajes.', 'urlPortada' => '/Juegos/GTAV', 'fechaLanzamiento' => '2013-09-17', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Multiplataforma', 'idGenero'=>1, 'idGenero2' => 6],

          ['titulo' => 'Dishonored 2', 'descripcion' => 'Segunda entrega del videojuego Dishonored creado por Arkane Studios, que apuesta por dos protagonistas y una ambientación en Karnaka que tiene lugar 15 años después del original.', 'urlPortada' => '/Juegos/DH2.jpg', 'fechaLanzamiento' => '2016-11-11', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Multiplataforma', 'idGenero'=>1, 'idGenero2' => 2],

          ['titulo' => 'FIFA 17', 'descripcion' => 'Este será el primer juego de la FIFA en la serie en emplear el motor de juego Frostbite. Además, este será el primer videojuego de la serie que tendrá la aparición e interacción de entrenadores de fútbol. También la incorporación del modo historia con Alex Hunter.4 El 21 de julio de 2016, Marco Reus fue elegido para ser la imagen de la portada oficial del videojuego.', 'urlPortada' => '/Juegos/FIFA.jpg', 'fechaLanzamiento' => '2016-09-27', 'calificacionPagina' => 0, 'calificacionUsuarios' => 0, 'plataforma' => 'Multiplataforma', 'idGenero'=>4, 'idGenero2' =>null],
        ]);
    }
}
