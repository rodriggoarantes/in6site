/*
 * HammerForm - Plugin JQuery para validacao de formularios Html
 * @author Rodrigo Arantes - rodriggoarantes@gmail.com
 * @created 20140301 
 * jQuery Boilerplate - v3.3.1 
 */
// the semi-colon before function invocation is a safety net against concatenated
// scripts and/or other plugins which may not be closed properly.
;(function ( $, window, document, undefined ) {

		// undefined is used here as the undefined global variable in ECMAScript 3 is
		// mutable (ie. it can be changed by someone else). undefined isn't really being
		// passed in so we can ensure the value of it is truly undefined. In ES5, undefined
		// can no longer be modified.

		// window and document are passed through as local variable rather than global
		// as this (slightly) quickens the resolution process and can be more efficiently
		// minified (especially when both are regularly referenced in your plugin).

		// Create the defaults once
		var pluginName = "hammerForm";
		var messages = {
			msgRequired: "O campo {{name_field}} é de preenchimento obrigatório",
			msgInvalid: "O valor informado no campo {{name_field}} é inválido"
		}
		//Configurações padroes para o plugin
		var defaults = {
			title: "Plugin JQuery Hammer Form",
			//parametro usado para ativar validação em sequencia, valida todos campos antes de parar
			//Se falso ira validar ate o primeiro campo invalido e é interrompido
			validSequence: false,
			fnBeforeCheck: "", //Funçao executada Antes da validação do hammer
			fnAfterCheck: "" //Funçao executada Depois da validação do hammer
		};
		
		function debug(msg) {
			if (window.console && window.console.log) {
				try {
					window.console.log(msg);
				} catch(e){}
			}
		}

		// The actual plugin constructor
		function Plugin ( element, options ) {
				//Nome do plugin
				this._name = pluginName;
				//Valores padroes de configuraçoes
				this._defaults = defaults;
				//Elemento passado na chamada do plugin pelo seletor JQuery
				this.element = element;
				//Container, objeto externo que envolve o formulario
				this._container = $(element).parent();

				// jQuery has an extend method which merges the contents of two or
				// more objects, storing the result in the first object. The first object
				// is generally empty as we don't want to alter the default options for
				// future instances of the plugin
				//pega dois ou mais objetos como argumentos e une seus conteúdos dentro do primeiro objeto.
				this.settings = $.extend( {}, defaults, options );
				//Inicia o plugin
				this.init();
		}

		Plugin.prototype = {
				init: function () {

						debug("start-plugin-init()");

						$(this.element).on("submit", this, function(event) {
							event.preventDefault();
							event.data.f2();
						});

						debug("end-plugin-init()");
				},
				f1: function () {
						debug("f1 : " + this.element + " - " + this.settings);
						var list = $(this.element).find("input[type='text'], input[type='password'], select, textarea");
						debug("list: " + list.length);
						return list;
				},
				f2: function () {
						debug("f2:  " + this.element + " -- " + this.settings);
						var hammer = this;
						var retorno = true;

						//Execução de funçao propria antes da validaçao
						if (hammer.settings.fnBeforeCheck != "") {
							debug("fnBeforeCheck: " + hammer.settings.fnBeforeCheck);
							try {
								if (hammer.settings.fnBeforeCheck.indexOf("(") >= 0) {
									retorno = eval("window." + hammer.settings.fnBeforeCheck);
								} else {
									retorno = eval("window." + hammer.settings.fnBeforeCheck + "()");
								}
							} catch(e){debug("Erro função fnBeforeCheck: " + e);}
						}

						//Obtem lista de campos
						var listFields = this.f1();
						//percorre lista dos campos
						$(listFields).each(function() {
							debug("tipo_campo: " + this.tagName);

							//Campo Obrigatorio
							if ($(this).hasClass("required")) {
								if (this.tagName.toUpperCase() == "INPUT") {
									if ($(this).attr("type") == "text" || $(this).attr("type") == "password") {
										retorno = $.fn[pluginName].methods.fieldRequired($(this).val(), $(this).attr("title"));
									} 
								} else if ( this.tagName.toUpperCase() == "TEXTAREA") {
									retorno = $.fn[pluginName].methods.fieldRequired($(this).val(), $(this).attr("title"));
								} else 	if (this.tagName.toUpperCase() == "SELECT" ) {
									retorno = $.fn[pluginName].methods.fieldRequired($(this).val(), $(this).attr("title"));
								}
							}

							//Campo Email
							if ($(this).hasClass("email") && $(this).val() != "" ) {
								retorno = $.fn[pluginName].methods.fieldEmail($(this).val(), $(this).attr("title"));
							}


							if (!hammer.settings.validSequence && !retorno) {
								//break each
								return false;
							}
						});

						//Execução de funçao Cliente DEPOIS da validação
						if (hammer.settings.fnAfterCheck != "" && (!hammer.settings.validSequence && retorno)) {
							debug("fnAfterCheck: " + hammer.settings.fnAfterCheck);
							try {
								if (hammer.settings.fnAfterCheck.indexOf("(") >= 0) {
									retorno = eval("window." + hammer.settings.fnAfterCheck);
								} else {
									retorno = eval("window." + hammer.settings.fnAfterCheck + "()");
								}
							} catch(e){debug("Erro função fnAfterCheck: " + e);}
						}

						if (retorno) {
							debug("valid-f2 : " + retorno);
							this.element.submit();
						}

						debug("end-f2");
				}
		};

		// A really lightweight plugin wrapper around the constructor, preventing against multiple instantiations
		$.fn[pluginName] = function ( options ) {
			//Ativa o plugin para cada instancia encontrada de acordo com o seletor passado na chamada do plugin
			return this.each(function() {
					//Nao permite reiniciar a instancia caso já exista
					if ( !$.data( this, "plugin_" + pluginName ) ) {
							$.data( this, "plugin_" + pluginName, new Plugin( this, options ) );
					}
			});
		};


		//Metotos Publicos Para validaçoes
		$.fn[pluginName].methods = {
			validCpf: function (value, nomeCampo) {
				if (value != null && typeof value != "undefined" && value != 0 && value != "") {
					return true;
				} else {
					alert(messages.msgInvalid.replace("{{name_field}}", nomeCampo));
					return false;
				}
			},
				
			fieldRequired: function (value, nomeCampo) {
				if (value != null && typeof value != "undefined" && value != 0 && value != "") {
					return true;
				} else {
					alert(messages.msgRequired.replace("{{name_field}}", nomeCampo));
					return false;
				}
			},
			
			fieldEmail: function (mail, nomeCampo) {
				var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
				if (typeof (mail) == "string") {
					if (er.test(mail)) {
						return true;
					}
				} else if (typeof (mail) == "object") {
					if (er.test(mail.value)) {
						return true;
					}
				}
				alert(messages.msgInvalid.replace("{{name_field}}", nomeCampo));
				return false;
			}
		};
		//Insere numa variavel com nome do plugin metodos e variaveis para acesso publico
		$.hammerForm = $.fn[pluginName];

})( jQuery, window, document );
