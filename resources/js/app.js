import { bootstrap, enableTooltip, enablePopover } from "./plugins/bootstrap";

try {
    enableTooltip();
    enablePopover();
    window.bootstrap = bootstrap;
} catch (exception) {
    console.error(exception);
}
