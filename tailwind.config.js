/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                inter: ["'Inter'", "sans-serif"],
                productSans: ["'Product Sans'"],
                lucidaSans: ["Lucida Sans Typewriter", "monoscape"],
                // sans: ["Product Sans", "sans-serif"],
            },
            colors: {
                primary: "#2D2A2A",
                secondary: "#64748b",
                light: "#f7f7f7",
                pastelGreen: "#DCEDC0",
                // dark: "#0f172a",
            },
            transitionDuration: {
                600: "600ms",
            },
            transitionTimingFunction: {
                "io-card": "cubic-bezier(.28, -0.03, 0, .99)",
            },
        },
    },
    plugins: [],
};
