import { registerBlockType } from '@wordpress/blocks'
import { RichText } from '@wordpress/block-editor'
import { __ } from '@wordpress/il8n'
import block from './block.json'

registerBlockType(block.name, {
    edit() {
        return (
            <RichText
                tagName="h2"
                placeholder={__('Enter Heading', 'udemy-plus')}
            />
        )
    }
})