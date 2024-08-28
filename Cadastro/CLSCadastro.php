<?php

class Cadastro{

    // Variáveis - Cadastro Aluno
    private $Nome_Aluno;
    private $Data_Nascimento_Aluno;
    private $CPF_Aluno; 
    private $Email_Aluno;
    private $Senha_Aluno;
    private $Celular_Aluno;
    private $CEP_Aluno;
    private $Endereco_Numero_Aluno;
    private $Endereco_Complemento_Aluno;


    // Variáveis - Cadastro Professor
    private $Nome_Professor;
    private $Data_Nascimento_Professor;
    private $CPF_Professor; 
    private $Email_Professor;
    private $Senha_Professor;
    private $Celular_Professor;
    private $CEP_Professor;
    private $Endereco_Numero_Professor;
    private $Endereco_Complemento_Professor;


    // Get Set - Alunos

    public function getNome_Aluno(){
        return($this -> Nome_Aluno);
    }

    public function setNome_Aluno($Nome_Aluno){
        $this -> Nome_Aluno = $Nome_Aluno;
    }

    public function getData_Nascimento_Aluno(){
        return($this -> Data_Nascimento_Aluno);
    }

    public function setData_Nascimento_Aluno($Data_Nascimento_Aluno){
        $this -> Data_Nascimento_Aluno = $Data_Nascimento_Aluno;
    }
    
    public function getCPF_Aluno(){
        return($this -> CPF_Aluno);
    }

    public function setCPF_Aluno($CPF_Aluno){
        $this -> CPF_Aluno = $CPF_Aluno;
    }

    public function getEmail_Aluno(){
        return($this -> Email_Aluno);
    }

    public function setEmail_Aluno($Email_Aluno){
        $this -> Email_Aluno = $Email_Aluno;
    }

    public function getSenha_Aluno(){
        return($this -> Senha_Aluno);
    }

    public function setSenha_Aluno($Senha_Aluno){
        $this -> Senha_Aluno = $Senha_Aluno;
    }

    public function getCelular_Aluno(){
        return($this -> Celular_Aluno);
    }

    public function setCelular_Aluno($Celular_Aluno){
        $this -> Celular_Aluno = $Celular_Aluno;
    }

    public function getCEP_Aluno(){
        return($this -> CEP_Aluno);
    }

    public function setCEP_Aluno($CEP_Aluno){
        $this -> CEP_Aluno = $CEP_Aluno;
    }

    public function getEndereco_Numero_Aluno(){
        return($this -> Endereco_Numero_Aluno);
    }

    public function setEndereco_Numero_Aluno($Endereco_Numero_Aluno){
        $this -> Endereco_Numero_Aluno = $Endereco_Numero_Aluno;
    }

    public function getEndereco_Complemento_Aluno(){
        return($this -> Endereco_Complemento_Aluno);
    }

    public function setEndereco_Complemento_Aluno($Endereco_Complemento_Aluno){
        $this -> Endereco_Complemento_Aluno = $Endereco_Complemento_Aluno;
    }


     // Get Set - Professor

     public function getNome_Professor(){
        return($this -> Nome_Professor);
    }

    public function setNome_Professor($Nome_Professor){
        $this -> Nome_Professor = $Nome_Professor;
    }

    public function getData_Nascimento_Professor(){
        return($this -> Data_Nascimento_Professor);
    }

    public function setData_Nascimento_Professor($Data_Nascimento_Professor){
        $this -> Data_Nascimento_Professor = $Data_Nascimento_Professor;
    }
    
    public function getCPF_Professor(){
        return($this -> CPF_Professor);
    }

    public function setCPF_Professor($CPF_Professor){
        $this -> CPF_Professor = $CPF_Professor;
    }

    public function getEmail_Professor(){
        return($this -> Email_Professor);
    }

    public function setEmail_Professor($Email_Professor){
        $this -> Email_Professor = $Email_Professor;
    }

    public function getSenha_Professor(){
        return($this -> Senha_Professor);
    }

    public function setSenha_Professor($Senha_Professor){
        $this -> Senha_Professor = $Senha_Professor;
    }

    public function getCelular_Professor(){
        return($this -> Celular_Professor);
    }

    public function setCelular_Professor($Celular_Professor){
        $this -> Celular_Professor = $Celular_Professor;
    }

    public function getCEP_Professor(){
        return($this -> CEP_Professor);
    }

    public function setCEP_Professor($CEP_Professor){
        $this -> CEP_Professor = $CEP_Professor;
    }

    public function getEndereco_Numero_Professor(){
        return($this -> Endereco_Numero_Professor);
    }

    public function setEndereco_Numero_Professor($Endereco_Numero_Professor){
        $this -> Endereco_Numero_Professor = $Endereco_Numero_Professor;
    }

    public function getEndereco_Complemento_Professor(){
        return($this -> Endereco_Complemento_Professor);
    }

    public function setEndereco_Complemento_Professor($Endereco_Complemento_Professor){
        $this -> Endereco_Complemento_Professor = $Endereco_Complemento_Professor;
    }


    // Método - Matrícula

    public function Matricula(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare(("insert into TB_Aluno (Data_Matricula, Nome_Aluno, Data_Nascimento_Aluno, CPF_Aluno, Email_Aluno, Senha_Aluno, Celular_Aluno, CEP_Aluno, Endereco_Numero_Aluno, Endereco_Complemento_Aluno,  ) values(NOW(),?,?,?,?,?,?,?,?,?,?)"));
            $comando -> bindParam(1, $this -> Nome_Aluno);
            $comando -> bindParam(2, $this -> Data_Nascimento_Aluno);
            $comando -> bindParam(3, $this -> CPF_Aluno);
            $comando -> bindParam(4, $this -> Email_Aluno);
            $comando -> bindParam(5, $this -> Senha_Aluno);
            $comando -> bindParam(6, $this -> Celular_Aluno);
            $comando -> bindParam(7, $this -> CEP_Aluno);
            $comando -> bindParam(8, $this -> Endereco_Numero_Aluno);
            $comando -> bindParam(9, $this -> Endereco_Complemento_Aluno);

            
            if($comando -> execute()){
                $retorno = "Matrícula realizada com sucesso!";
            }
    
        }
    
        catch(PDOException $Erro){
            $retorno = "Erro na matrícula" . $Erro -> getMessage();
        }
    
        return($retorno);
        
    }

    //Método - Solicitar

    public function Solicitar(){
        
    }

    //Método - Cadastrar

    public function Cadastrar(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare(("insert into TB_Aluno (Nome_Prof, Data_Nasc_Prof, CPF_Prof, Email_Prof, Senha_Prof, Celular_Prof, CEP_Prof, Endereco_Num_Prof, Endereco_Complemento_Prof, Data_Cadastro) values(?,?,?,?,?,?,?,?,?,?,NOW())"));
            $comando -> bindParam(1, $this -> Nome_Professor);
            $comando -> bindParam(2, $this -> Data_Nascimento_Professor);
            $comando -> bindParam(3, $this -> CPF_Professor);
            $comando -> bindParam(4, $this -> Email_Professor);
            $comando -> bindParam(5, $this -> Senha_Professor);
            $comando -> bindParam(6, $this -> Celular_Professor);
            $comando -> bindParam(7, $this -> CEP_Professor);
            $comando -> bindParam(8, $this -> Endereco_Numero_Professor);
            $comando -> bindParam(9, $this -> Endereco_Complemento_Professor);

            
            if($comando -> execute()){
                $retorno = "Cadastro realizado com sucesso";
            }
    
        }
    
        catch(PDOException $Erro){
            $retorno = "Erro no cadastro" . $Erro -> getMessage();
        }
    
        return($retorno);
        
    }

}
