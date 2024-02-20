<!DOCTYPE html>
<html>

<head>
  <title>Generador de Firma</title>
  <link rel="stylesheet" href="..\assets\css\formularios.css" />
</head>

<body>
  <main>
    <header>
      <h1>Generador de Firma</h1>
    </header>
    <div class="container-fluid">
      <form action="../index.php?c=Users&a=userCreate" method="post">
        <p>Primer Nombre</p>
        <input type="text" id="Primer_Nombre" name="Primer_Nombre" placeholder="Primer Nombre" required /><br /><br />

        <p>Segundo Nombre</p>
        <input type="text" id="Segund_Nombre" name="Segund_Nombre" placeholder="Segundo Nombre" /><br /><br />

        <p>Primer Apellido</p>
        <input type="text" id="Primer_Apellido" name="Primer_Apellido" placeholder="Primer Apellido"
          required /><br /><br />

        <p>Segundo Apellido</p>
        <input type="text" id="Segund_Apellido" name="Segund_Apellido" placeholder="Segundo Apellido" /><br /><br />

        <!--<p>Cargo</p>
        <input type="text" id="cargo" name="cargo" placeholder="Cargo" required /><br /><br />-->

        <p>Dirección</p>
        <input type="text" id="direccion" name="direccion" placeholder="Dirección" required /><br /><br />

        <p>Telefono</p>
        <input type="tel" id="Telefono_Cor" name="Telefono_Cor" placeholder="Teléfono Corporativo" pattern="[0-9]{0,7}"
          title="Por favor, ingresa exactamente 7 números" required maxlength="7" /><br /><br />

        <p>Celular Corporativo</p>
        <input type="tel" id="Celular" name="Celular" placeholder="Celular Corporativo" pattern="[0-9]{0,10}"
          title="Por favor, ingresa exactamente 10 números" required maxlength="10" /><br /><br />

        <p>Extención</p>
        <input type="tel" id="Ext" name="Ext" placeholder="Extención" pattern="[0-9]{0,4}"
          title="Por favor, ingresa exactamente 4 números" required maxlength="4" /><br /><br />

        <p>Selecciona Una Ciudad</p>
        <select name="Ciudad" required>
          <option disabled selected value=""></option>
          <option value="bogota">Bogotá</option>
          <option value="cali">Cali</option>
          <option value="manizales">Manizales</option>
          <option value="medellin">Medellin</option>
        </select>
        <br /><br />
        <p>Seleccione El Indicativo</p>
        <select name="Indicativo" required>
          <option disabled selected value=""></option>
          <option value="601">601</option>
          <option value="602">602</option>
          <option value="606">606</option>
          <option value="604">604</option>
        </select>
        <br /><br />
        <p>Seleccione su Cargo</p>
        <select name="Id_Cargo" required>
          <option disabled selected value=""></option>
          <option value="1">Administrador</option>
          <option value="2">Gerente</option>
          <option value="3">Asesor Comercial</option>
        </select>
        <br /><br />

        <input type="submit" value="Generar Firm" />
      </form>
    </div>
  </main>
</body>

</html>