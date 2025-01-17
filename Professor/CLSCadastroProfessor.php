<?php

class CadastroProfessor{
    // Variáveis - Cadastro Professor
    private $Nome_Professor;
    private $Data_Nascimento_Professor;
    private $CPF_Professor; 
    private $Email_Professor;
    private $Senha_Professor;
    private $Celular_Professor;
    private $CEP_Professor;
    private $Endereco_Professor;
    private $Bairro_Professor;
    private $Cidade_Professor;
    private $UF_Professor;
    private $Endereco_Numero_Professor;
    private $Endereco_Complemento_Professor;
    private $Link_Aula;
    private $Assunto_Aula;
    private $ID_Materia;

    public function getLink_Aula(){
        return($this -> Link_Aula);
    }

    public function setLink_Aula($Link_Aula){
        $this -> Link_Aula = $Link_Aula;
    }

    public function getAssunto_Aula(){
        return($this -> Assunto_Aula);
    }

    public function setAssunto_Aula($Assunto_Aula){
        $this -> Assunto_Aula = $Assunto_Aula;
    }

    public function getID_Materia(){
        return($this -> ID_Materia);
    }

    public function setID_Materia($ID_Materia){
        $this -> ID_Materia = $ID_Materia;
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

    public function getEndereco_Professor(){
        return($this -> Endereco_Professor);
    }

    public function setEndereco_Professor($Endereco_Professor){
        $this -> Endereco_Professor = $Endereco_Professor;
    }

    public function getBairro_Professor(){
        return($this -> Bairro_Professor);
    }

    public function setBairro_Professor($Bairro_Professor){
        $this -> Bairro_Professor = $Bairro_Professor;
    }

    public function getCidade_Professor(){
        return($this -> Cidade_Professor);
    }

    public function setCidade_Professor($Cidade_Professor){
        $this -> Cidade_Professor = $Cidade_Professor;
    }

    public function getUF_Professor(){
        return($this -> UF_Professor);
    }

    public function setUF_Professor($UF_Professor){
        $this -> UF_Professor = $UF_Professor;
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

    //Método - Solicitar

    public function Solicitar(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare("INSERT INTO TB_Solicitar (Nome_Professor, Data_Nascimento_Professor, CPF_Professor, Email_Professor, Senha_Professor, Celular_Professor, CEP_Professor, Endereco_Professor, Bairro_Professor, Cidade_Professor, UF_Professor,Endereco_Numero_Professor, Endereco_Complemento_Professor, Data_Solicitacao) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,NOW());
                                             SELECT Nome_Professor, Data_Nascimento_Professor,CPF_Professor, Email_Professor, Celular_Professor, CEP_Professor, Endereco_Professor, Bairro_Professor, Cidade_Professor, UF_Professor, Endereco_Numero_Professor, Endereco_Complemento_Professor WHERE CPF_Professor = ?  ");
            $comando -> bindParam(1, $this -> Nome_Professor);
            $comando -> bindParam(2, $this -> Data_Nascimento_Professor);
            $comando -> bindParam(3, $this -> CPF_Professor);
            $comando -> bindParam(4, $this -> Email_Professor);
            $comando -> bindParam(5, $this -> Senha_Professor);
            $comando -> bindParam(6, $this -> Celular_Professor);
            $comando -> bindParam(7, $this -> CEP_Professor);
            $comando -> bindParam(8, $this -> Endereco_Professor);
            $comando -> bindParam(9, $this -> Bairro_Professor);
            $comando -> bindParam(10, $this -> Cidade_Professor);
            $comando -> bindParam(11, $this -> UF_Professor);
            $comando -> bindParam(12, $this -> Endereco_Numero_Professor);
            $comando -> bindParam(13, $this -> Endereco_Complemento_Professor);
            $comando -> bindParam(14, $this -> CPF_Professor);

            
            if($comando -> execute()){         
                $retorno = "Solicitação realizada com sucesso!";
            }
    
        }
    
        catch(PDOException $Erro){
            $retorno = "Erro na solicitação!" . $Erro -> getMessage();
        }
    
        return $retorno;
    
    }


    

    //Método - Exibir Solicitação

    

    // Método excluir conta

    public function ExcluirConta(){
        include "../Conexao.php";

        try{
            $comando = $conexao -> prepare("DELETE FROM TB_Professor WHERE CPF_Professor = ? ");
            $comando -> bindParam(1, $this -> CPF_Professor);

            if($comando -> execute()){         
                $retorno = "Sua conta foi excluida";
            }
        }
        catch(PDOException $Erro){
            $retorno = "Erro" . $Erro -> getMessage();
        }

    }

    public function SolicitarAula(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare("INSERT INTO TB_SolicitarAula (Link_Aula, Assunto_Aula, FK_ID_Materia) values (?, ?, ?)");
            $comando -> bindParam(1, $this -> Link_Aula);
            $comando -> bindParam(2, $this -> Assunto_Aula);
            $comando -> bindParam(3, $this -> ID_Materia);


            
            if($comando -> execute()){         
                $retorno = "Solicitação realizada com sucesso!";
            }
    
        }
    
        catch(PDOException $Erro){
            $retorno = "Erro na solicitação!" . $Erro -> getMessage();
        }
    
        return $retorno;
    
    }
}
