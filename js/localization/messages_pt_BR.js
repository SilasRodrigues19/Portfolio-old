(function( factory ) {
	if ( typeof define === "function" && define.amd ) {
		define( ["jquery", "../jquery.validate"], factory );
	} else if (typeof module === "object" && module.exports) {
		module.exports = factory( require( "jquery" ) );
	} else {
		factory( jQuery );
	}
}(function( $ ) {

/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: PT (Portuguese; português)
 * Region: BR (Brazil)
 */
$.extend( $.validator.messages, {

	// Core
	required: "Este campo &eacute; obrigat&oacute;rio.",
	remote: "Por favor, corrija este campo.",
	email: "Por favor, digite um endere&ccedil;o de email v&aacute;lido.",
	url: "Por favor, digite uma URL v&aacute;lida.",
	date: "Por favor, digite uma data v&aacute;lida.",
	dateISO: "Por favor, digite uma data v&aacute;lida (ISO).",
	number: "Por favor, digite um n&uacute;mero v&aacute;lido.",
	digits: "Por favor, digite somente d&iacute;gitos.",
	creditcard: "Por favor, digite um cart&atilde;o de cr&eacute;dito v&aacute;lido.",
	equalTo: "Por favor, digite o mesmo valor novamente.",
	maxlength: $.validator.format( "Por favor, digite menos que {0} caracteres." ),
	minlength: $.validator.format( "Por favor, digite no m&iacute;nimo {0} caracteres." ),
	rangelength: $.validator.format( "Por favor, digite um valor entre {0} e {1} caracteres de comprimento." ),
	range: $.validator.format( "Por favor, digite um valor entre {0} e {1}." ),
	max: $.validator.format( "Por favor, digite um valor menor ou igual a {0}." ),
	min: $.validator.format( "Por favor, digite um valor maior ou igual a {0}." ),
	step: $.validator.format( "Por favor, digite um valor m&acute;tiplo de {0}." ),

	// Metodos Adicionais
	maxWords: $.validator.format( "Por favor, digite com {0} palavras ou menos." ),
	minWords: $.validator.format( "Por favor, digite pelo menos {0} palavras." ),
	rangeWords: $.validator.format( "Por favor, digite entre {0} e {1} palavras." ),
	accept: "Por favor, digite um tipo v&aacute;lido.",
	alphanumeric: "Por favor, digite somente com letras, n&uacute;meros e sublinhados.",
	bankaccountNL: "Por favor, digite com um n&uacute;mero de conta banc&aacute;ria v&aacute;lida.",
	bankorgiroaccountNL: "Por favor, digite um banco v&aacute;lido ou n&uacute;mero de conta.",
	bic: "Por favor, digite um c&oacute;digo BIC v&aacute;lido.",
	cifES: "Por favor, digite um c&oacute;digo CIF v&aacute;lido.",
	creditcardtypes: "Por favor, digite um n&uacute;mero de cart&atilde;o de cr&eacute;dito v&aacute;lido.",
	currency: "Por favor, digite uma moeda v&aacute;lida.",
	dateFA: "Por favor, digite uma data correta.",
	dateITA: "Por favor, digite uma data correta.",
	dateNL: "Por favor, digite uma data correta.",
	extension: "Por favor, digite um valor com uma extens&atilde;o v&aacute;lida.",
	giroaccountNL: "Por favor, digite um n&uacute;mero de conta corrente v&aacute;lido.",
	iban: "Por favor, digite um c&oacute;digo IBAN v&aacute;lido.",
	integer: "Por favor, digite um n&uacute;mero n&atilde;o decimal.",
	ipv4: "Por favor, digite um IPv4 v&aacute;lido.",
	ipv6: "Por favor, digite um IPv6 v&aacute;lido.",
	lettersonly: "Por favor, digite apenas com letras.",
	letterswithbasicpunc: "Por favor, digite apenas letras ou pontua&ccedil;ões.",
	mobileNL: "Por favor, fornece&ccedil;a um n&uacute;mero v&aacute;lido de telefone.",
	mobileUK: "Por favor, fornece&ccedil;a um n&uacute;mero v&aacute;lido de telefone.",
	nieES: "Por favor, digite um NIE v&aacute;lido.",
	nifES: "Por favor, digite um NIF v&aacute;lido.",
	nowhitespace: "Por favor, n&atilde;o utilize espa&ccedil;os em branco.",
	pattern: "O formato fornenecido &eacute; inv&aacute;lido.",
	phoneNL: "Por favor, fornece&ccedil;a um n&uacute;mero de telefone v&aacute;lido.",
	phoneUK: "Por favor, fornece&ccedil;a um n&uacute;mero de telefone v&aacute;lido.",
	phoneUS: "Por favor, fornece&ccedil;a um n&uacute;mero de telefone v&aacute;lido.",
	phonesUK: "Por favor, fornece&ccedil;a um n&uacute;mero de telefone v&aacute;lido.",
	postalCodeCA: "Por favor, fornece&ccedil;a um n&uacute;mero de c&oacute;digo postal v&aacute;lido.",
	postalcodeIT: "Por favor, fornece&ccedil;a um n&uacute;mero de c&oacute;digo postal v&aacute;lido.",
	postalcodeNL: "Por favor, fornece&ccedil;a um n&uacute;mero de c&oacute;digo postal v&aacute;lido.",
	postcodeUK: "Por favor, fornece&ccedil;a um n&uacute;mero de c&oacute;digo postal v&aacute;lido.",
	postalcodeBR: "Por favor, digite um CEP v&aacute;lido.",
	require_from_group: $.validator.format( "Por favor, digite pelo menos {0} destes campos." ),
	skip_or_fill_minimum: $.validator.format( "Por favor, optar entre ignorar esses campos ou preencher pelo menos {0} deles." ),
	stateUS: "Por favor, digite um estado v&aacute;lido.",
	strippedminlength: $.validator.format( "Por favor, digite pelo menos {0} caracteres." ),
	time: "Por favor, digite um hor&aacute;rio v&aacute;lido, no intervado de 00:00 e 23:59.",
	time12h: "Por favor, digite um hor&aacute;rio v&aacute;lido, no intervado de 01:00 e 12:59 am/pm.",
	url2: "Por favor, fornece&ccedil;a uma URL v&aacute;lida.",
	vinUS: "O n&uacute;mero de identifica&ccedil;&atilde;o de ve&iacute;culo informada (VIN) &eacute; inv&aacute;lido.",
	zipcodeUS: "Por favor, fornece&ccedil;a um c&oacute;digo postal americano v&aacute;lido.",
	ziprange: "O c&oacute;digo postal deve estar entre 902xx-xxxx e 905xx-xxxx",
	cpfBR: "Por favor, digite um CPF v&aacute;lido."
} );
return $;
}));