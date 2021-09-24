<?php 
    class Retangulo{
        private $largura;
        private $altura;

        public function area($altura, $largura){
            $area = $altura * $largura;
            return $area;
        }

        public function perimetro($largura, $altura){
            $perimetro = 2 * ($largura * $altura);
            return $perimetro;
        }

        public function diagonal($largura, $altura){
            $diagonal = pow($largura,2) + pow($altura,2);
            $diagonal = sqrt($diagonal);
            return $diagonal;
        }
    }

    class Produto{
        private $nome;
        private $preco;
        private $quantidade;

        public function valorTotalEmEstoque(){
            $valorTotal = 0;
            $valorTotal += $this->preco * $this->quantidade;
            return $valorTotal;
        }

        public function adicionarProdutos($nome, $preco, $quantidade){
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
        }

        public function removerProdutos(){
            $this->nome = null;
            $this->preco = null;
            $this->quantidade = null;
        }
    }

    class Professor{
        private $nome;
        private $sobrenome;
        private $telefone;
        private $oculos;

        public function __construct(){
            $this->nome = 'Rafael';
            $this->sobrenome = 'Silva';
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function setOculos($oculos){
            if($oculos === true || $oculos === false)
                $this->oculos = $oculos;
            else
                echo "Óculos deve ser true ou false"; 
        }
    }

    class Aluno{
        private $nome;
        private $email;
        private $cidade;
        private $status;

        public function __construct(){
            $this->nome = 'Rafael';
        }

        public function setEmail($email){
            if($email != null)
                $this->email = $email;
            else
                echo "Email não pode ser nulo<br>";
        }

        public function setCidade($cidade){
            if($cidade != null && strlen($cidade) > 5)
                $this->cidade = $cidade;
            else
                echo "Cidade não pode ser nula e deve conter mais de 5 caracteres<br>";
        }

        public function setStatus($status){
            if($status === true || $status === false)
                $this->status = $status;
            else
                echo "status deve ser true ou false"; 
        }
    }
?>