const nivelSocio = document.querySelector('#p_calidad');
const nombreSocio1 = document.querySelector('#p_inputnombres');
const nombreSocio2 = document.querySelector('#p_inputnombress');

nivelSocio.addEventListener('input', (e) => {
  infoSocio = e.target.value;
  nombreSocio1.value = infoSocio
  nombreSocio2.value = infoSocio
})