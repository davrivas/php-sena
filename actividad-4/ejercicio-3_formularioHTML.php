<!DOCTYPE html>
<html> 
    <head> 
        <title>Ejercicio 3 (Formulario HTML)</title>
        <meta charset="utf-8">
    </head>
    <body>
        <section class="container">
            <div class="login">
                <h1>POR FAVOR LLENE ESTE FORMULARIO</h1>

                <form method="post" action="ejercicio-3_recibeDatos.php">
                    <p>
                        <label>
                            Nombre
                            <input type="text" name="nombre" 
                                   placeholder="Nombre Completo" 
                                   autofocus required>
                        </label>
                    </p>
                    <p>
                        <label>
                            Fecha de Nacimiento
                            <input type="date" name="fecha_nacimiento"
                                   placeholder="Fecha de Nacimiento">
                        </label>
                    </p>
                    <p> 
                        <label>
                            Teléfono
                            <input type="text" name="telefono"
                                   placeholder="Teléfono"> 
                        </label>
                    </p>
                    <p>
                        <label>
                            e-mail
                            <input type="mail" name="email" 
                                   placeholder="e-mail">
                        </label>
                    </p>
                    <p>
                        <label> Estado Civil</label><br />
                        <label>
                            <input type="radio" name="estadoCivil" 
                                   value="Casado"> 
                            Casado
                        </label>
                        <label>
                            <input type="radio" name="estadoCivil" 
                                   value="Soltero"> 
                            Soltero
                        </label>
                        <label>
                            <input type="radio" name="estadoCivil" 
                                   value="Unión Libre"> 
                            Unión Libre
                        </label>
                    </p>
                    <p>
                        <label>
                            Departamento
                            <select name="departamento">
                                <option value ="Amazonas">Amazonas</option>
                                <option value ="Antioquia">Antioquia</option>
                                <option value ="Arauca">Arauca</option>
                                <option value ="Atlántico">
                                    Atlántico
                                </option>
                                <option value ="Bolívar">Bolívar</option>
                                <option value ="Boyacá">Boyacá</option>
                                <option value ="Caldas">Caldas</option>
                                <option value ="Caquetá">Caquetá</option>
                                <option value ="Casanare">Casanare</option>
                                <option value ="Cauca">Cauca</option>
                                <option value ="Cesar">Cesar</option>
                                <option value ="Chocó">Chocó</option>
                                <option value ="Córdoba">Córdoba</option>
                                <option value ="Cundinamarca">
                                    Cundinamarca
                                </option>
                                <option value ="Guainia">Guainia</option>
                                <option value ="Guaviare">Guaviare</option>
                                <option value ="Huila">Huila</option>
                                <option value ="La Guajira">La Guajira</option>
                                <option value ="Magdalena">Magdalena</option>
                                <option value ="Meta">Meta</option>
                                <option value ="Nariño">Nariño</option>
                                <option value ="Norte de Santander">
                                    Norte de Santander
                                </option>
                                <option value ="Putumayo">Putumayo</option>
                                <option value ="Quindío">Quindío</option>
                                <option value ="Risaralda">Risaralda</option>
                                <option value ="San Andrés y Providencia">
                                    San Andrés y Providencia
                                </option>
                                <option value ="Santander">Santander</option>
                                <option value ="Sucre">Sucre</option>
                                <option value ="Tolima">Tolima</option>
                                <option value ="Valle del Cauca">
                                    Valle del Cauca
                                </option>
                                <option value ="Vaupés">Vaupés</option>
                                <option value ="Vichada">Vichada</option>
                            </select>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input type="checkbox" name="hijos"> 
                            ¿Tiene hijos?
                        </label>
                    </p>
                    </p>
                    <input type="hidden" name="datoOculto" value="Esta
                           información esta oculta al usuario"> 
                    <p class="submit">
                        <input type="submit" >
                    </p>
                </form>
            </div>
        </section>
    </body>
</html>