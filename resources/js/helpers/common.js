const isEmptyObject = (obj) => {
    return (
        Object.keys(obj).length === 0 &&
        Object.getPrototypeOf(obj) === Object.prototype
    )
}

export {isEmptyObject}
