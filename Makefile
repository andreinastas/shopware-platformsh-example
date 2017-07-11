.phony:
updateshopware:
	git subtree pull --prefix shopware https://github.com/shopware/shopware.git 5.3 --squash
