const isEmptyObject = (obj) => {
    return (
        Object.keys(obj).length === 0 &&
        Object.getPrototypeOf(obj) === Object.prototype
    )
}

/**
 * Преобразует строковое значение, содержащее булево значение "1" / "0" к булеву значению true/false
 * @param {string} guest Гость, булево значение в формате строки "1" / "0"
 * @returns true/false
 */
const isGuest = (guest) => guest === '1'

export {isEmptyObject, isGuest}
