<?php 
class transactionsController extends AppController {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//opcion 1
		$options= array(
			
			);

		$this->set("transactions", 
			$this->transactions->find(
				"transactions, categories, accounts", 
				"all", 
				$options
				)
			);
	}


	public function add(){

		if ($_SESSION["type_name"]=="Administradores") {
			if ($_POST) {
				//$pass = new Password();
				//$_POST["password"] = $pass->getPassword($_POST["password"]);
				if ($this->transactions->save("transactions", $_POST)){
					$this->redirect(array("controller"=>"transactions"));
				}else{
					$this->redirect(array("controller"=>"types","method"=>"add"));				
				}
			}
			$this->set("accounts", $this->transactions->find("accounts"));
			$this->set("categories", $this->transactions->find("categories"));
		}else{
			$this->redirect(array("controller"=>"users"));
			}
		}

	public function edit($id){
		if ($_POST) {
			
			
			if ($this->transactions->update("transactions", $_POST)) {
				$this->redirect(array("controller"=> "transactions"));
			}else{
				$this->redirect(
					array(
						"controller"=> "transactions",
						"method"=>"edit/".$_POST["id"])
					);
			}
		}
		$options = array(
			"conditions"=>"id=".$id
			);
		$this->set(
			"transaction",
			$this->transactions->find("transactions", "first", $options)
		);
		$this->set("transactions", $this->transactions->find("transactions"));
		
	}

	public function delete($id){
		$options = "transactions.id=".$id;
		if($this->transactions->delete("transactions", $options)){
			$this->redirect(array("controller"=>"transactions"));
		}

	}
}