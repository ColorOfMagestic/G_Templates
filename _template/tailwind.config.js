/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./src/**/*.{html,js,php,phtml}'],
	theme: {
		extend: {
			fontSize: {
				xs: '12px',
			},
			animation: {
				'bounce-custom': 'bounce 2s infinite',
			},
			keyframes: {
				bounce: {
					'0%, 100%': { transform: 'translateY(0)' },
					'50%': { transform: 'translateY(-10px)' },
				},
			},
		},
	},
	variants: {},
	plugins: [],
}
