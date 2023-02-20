export default {
    created(el, binding) {
        el.clickOutsideElement = (event) => {
            if (el !== event.target && !el.contains(event.target)) {
                binding.value(event);
            }
        }

        document.body.addEventListener('click', el.clickOutsideElement, false);
    },
    unmounted(el) {
        document.body.removeEventListener('click', el.clickOutsideElement);
    }
}
