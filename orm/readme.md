Estrutura básica da classe de modelo
===

A estrutura da classe de modelo deve conter os `Annotations` do Doctrine  e os métodos Get/Set de cada atributo.

@Entity:         Especifica que a classe é uma representação da tabela do banco de dados
@Table:          Define as propriedades da tabela
@Id:             Define a coluna como primary key
@GeneratedValue: Define a coluna com auto increment
@Column:         Define as propriedades da coluna da tabela

No link abaixo contem as demais propriedades disponíveis

    http://doctrine-orm.readthedocs.org/en/latest/reference/basic-mapping.html#property-mapping

Exemplo do Entity:

    /**
     * @Entity @Table(name="produtos")
     **/
    class Produto {

        /**
         * @Id @Column(type="integer") @GeneratedValue
         **/
        protected $id;

        /**
         *  @Column(type="string")
         **/
        protected $nome;

        public function getId() {
            return $this->id;
        }

        public function getNome() {
            return $this->name;
        }

        public function setNome($nome) {
            $this->name = $nome;
        }
    }