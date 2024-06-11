var flag = 0;
        function validarTexto(input) {
            var valido = true;
            if (input.classList.contains("texto")) {
                if (!isNaN(parseInt(input.value))) {
                    valido = false;
                }
            } else {
                if (!isNaN(input.value)) {
                    valido = false;
                }
            }
            if (valido) {
                input.classList.add("is-valid");
            } else {
                input.classList.add("is-invalid");
                flag = 1;
            }
            var nuevoElemento = document.createElement("div");
            nuevoElemento.className = "valido";
            if (valido) {
                nuevoElemento.innerHTML = "Has introducido un formato válido";
            } else {
                nuevoElemento.innerHTML = "Eso no existe";
            }
            input.parentNode.appendChild(nuevoElemento);
        }

        function validarCorreo(input, otroInput) {
            var correoRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            var valido = correoRegex.test(input.value);
            if (valido) {
                input.classList.add("is-valid");
            } else {
                input.classList.add("is-invalid");
                flag = 1;
            }

            var nuevoElemento = document.createElement("div");
            nuevoElemento.className = "valido";
            if (valido) {
                nuevoElemento.innerHTML = "Correo electrónico válido";
            } else {
                nuevoElemento.innerHTML = "Correo electrónico no válido";
            }
            input.parentNode.appendChild(nuevoElemento);
            if (otroInput && input.value !== otroInput.value) {
                input.classList.add("is-invalid");
                otroInput.classList.add("is-invalid");
                flag = 1;
            }
        }

        function Validarformulario() {
            flag = 0;
            var elementos = document.getElementsByClassName("valido");

            if (elementos.length > 0) {
                for (var i = elementos.length - 1; i >= 0; i--) {
                    var elemento = elementos[i];
                    elemento.parentNode.removeChild(elemento);
                }
            }
            var datos = document.querySelectorAll("input, textarea");
            for (var i = 0; i < datos.length; i++) {
                datos[i].classList.remove("is-invalid");
                datos[i].classList.remove("is-valid");
                if (datos[i].classList.contains('obligatorio') && datos[i].value==null) {
                    datos[i].classList.add("is-invalid");
                    flag = 1;
                } else {
                    if (datos[i].classList.contains("texto")) {
                        validarTexto(datos[i]);
                    }
                    if (datos[i].classList.contains("correo")) {
                        var otroInput = document.getElementById('correo1');
                        if (datos[i] === otroInput) {
                            validarCorreo(datos[i], document.getElementById('correo2'));
                        } else {
                            validarCorreo(datos[i], otroInput);
                        }
                    }
                }
            }

            if (flag == 0) {
                var modal = new bootstrap.Modal(document.getElementById('mi-modal'));
                modal.show();
            }

            return false;
        }