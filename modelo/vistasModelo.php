<?php 
	class vistasModelo{

		protected function obtener_vistas_modelo($vistas){

			$listaBlanca=["home", "clientes", "contratos", "planes", "gastos", "usuarios"];

			if(in_array($vistas, $listaBlanca)){
				if(is_file("./vistas/contenido/".$vistas."-view.php")){
					$contenido="./vistas/contenido/".$vistas."-view.php";
				}else{
					$contenido="login";
				}
			}elseif($vistas=="login"){
				$contenido="login";
			}elseif($vistas=="index"){
				$contenido="login";
			}else{
				$contenido="./vistas/contenido/404-view.php";
			}
			return $contenido;
		}

		protected function obtener_js_modelo($vistas){

			$listaBlanca=["home", "clientes", "contratos", "planes", "gastos", "usuarios"];

			if(in_array($vistas, $listaBlanca)){
				if(is_file("./vistas/vue/".$vistas."-vue.js")){
					$contenido="./vistas/vue/".$vistas."-vue.js";
				}else{
					$contenido="./vistas/vue/login-vue.js";
				}
			}elseif($vistas=="login"){
				$contenido="/vistas/vue/login-vue.js";
			}elseif($vistas=="index"){
				$contenido="/vistas/vue/login-vue.js";
			}else{
				$contenido="/vistas/vue/login-vue.js";
			}
			return $contenido;
		}
	}