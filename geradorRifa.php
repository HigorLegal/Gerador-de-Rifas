<header>
 


    <h1>Gerador de rifa</h1>
 
    
</header>;

<div class='titulo' style='margin-bottom: 20px;margin-top: 12 0px;'>
    <div class='line'>

        <p id='text-titulo'>formulario da rifa</p>
    </div>
</div>
<section id='formulario'>

    <form method='post' action='./rifa.php' enctype="multipart/form-data">

        <h2>premio : </h2>
        <input name='premio' id='premio' type='text' placeholder='coloque seu premio' maxlength='100' Required> </input>
        <h2>foto do premio</h2>
        <input type="file" name="imagem" id="imagem" required>

        <h2>Data</h2>
        <input name='data' id='data' type='date' placeholder='coloque a Data da rifa' Required> </input>

        <h2>valor</h2>
        <input id='valor' name='valor' type='number' placeholder='coloque o valor da rifa' Required> </input>

        <h2>quantidade de numeros</h2>
        <input id='quant' name='quant' type='number' step='0.01' placeholder='coloque a quantidade de numeros' Required> </input>

        
  
        <div style='margin-top:10px'>

            <input type='submit' id='salvar' name='salvar' placeholder='salvar'>
            <input type='reset' id='limpar' name='reset' placeholder='limpar'>
        </div>
    </form>

    
</section>
<div>


</div>;



<style>
    body {
        background-color: rgb(63, 63, 63);
        margin: 0;
    }

    #formulario {
        display: flex;
    }

    #formulario {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
    }

    form div input {
        background-color: #000000;
        color: #adadad;

    }

    form {
        display: flex;
        align-items: center;
        flex-direction: column;
    }


    input {
        text-align: center;
        padding: 10px;
    }

    a {
        justify-content: flex-start;
        font-size: 30px;
        background-color: rgb(100, 100, 100);
        color: aliceblue;
        padding: 5px;
        border-radius: 30px;
        text-decoration: none;
    }

    h2 {
        color: white;
        text-align: center
    }

    h1 {

        text-align: center
    }

    header {
        background-color: rgb(0, 0, 0);
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-evenly;
        color: white
    }

    #text-titulo {

color: white;
        border-radius: 30px;
        margin: 0 auto;
        text-align: center;
        font-size: 18px;
        

    }

    .titulo {
        width: 100%;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        flex-direction: column;
        margin-top: 40px;

        color: #010101;
    }

    .line {
        border: 2px solid gray;
        width: 100%;
        height: 25px;
        background: black;

    }
</style>
