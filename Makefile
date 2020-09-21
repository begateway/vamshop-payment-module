all:
	if [[ -e vamshop-payment-module.zip ]]; then rm vamshop-payment-module.zip; fi
	cd src && zip -r ../vamshop-payment-module.zip * -x "*/test/*" -x "*/.git/*" -x "*/examples/*"
