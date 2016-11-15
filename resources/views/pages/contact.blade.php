@extends('layouts.page-full')

@section('title')
	Contactez-nous
@stop

@section('page-full')
    <div class="col-sm-12">
        <h2 class="text-center">Contactez-nous par e-mail ou téléphone</h2>
        <hr>
    </div>

	<div class="col-sm-5 col-sm-push-7">
        <p>
            Si la forme ne fonctionne pas ou si vous voulez nous contacter directement, appelez-nous.

            <address>
                Port-au-Prince, Haiti<br>
                <abbr>Tel:</abbr> <a href="tel:+50936478199">(+509) 3647 8199</a><br/><br>
                <strong>L'équipe AH</strong><br>
                <a href="mailto:contact@annuairehaiti.com">contact@AnnuaireHaiti.com</a>
            </address>
        </p>
    </div>

    <div class="col-sm-7 col-sm-pull-5" id="contactForm">
        @{{ errors.collect('email') }}
        <hr class="visible-xs">
        <form method="post" @submit="validateBeforeSubmit">

            <div class="form-group has-feedback" :class="{
                'has-error': fields.dirty('name') && errors.has('name'),
                'has-success': fields.passed('name')}">
                <label for="name" class="control-label">@lang('form.name')</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Rentrez votre nom complet"
                    v-validate data-rules="required">
                <i class="fa fa-check form-control-feedback" aria-hidden="true"
                    v-show="fields.passed('name')"></i>
                <i class="fa fa-close form-control-feedback" aria-hidden="true"
                    v-show="fields.dirty('name') && errors.has('name')"></i>
                <span v-show="errors.has('name')" class="help-block">S'il vous plaît entrez votre nom</span>
            </div>

            <div class="form-group has-feedback" :class="{
                'has-error': fields.dirty('email') && errors.has('email'),
                'has-success': fields.passed('email')}">
                <label for="email" class="control-label">E-mail</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Rentrez votre email"
                    v-validate data-rules="required|email">
                <i class="fa fa-check form-control-feedback" aria-hidden="true"
                    v-show="fields.passed('email')"></i>
                <i class="fa fa-close form-control-feedback" aria-hidden="true"
                    v-show="fields.dirty('email') && errors.has('email')"></i>
                <span v-if="errors.collect('email')[0]" class="help-block">@{{errors.collect('email')}}S'il vous plaît entrez votre e-mail</span>
            </div>

            <div class="form-group has-feedback" :class="{
                'has-error': fields.dirty('subject') && errors.has('subject'),
                'has-success': fields.passed('subject')}">
                <label for="subject" class="control-label">Sujet
                    <i class="fa fa-check" aria-hidden="true" v-show="fields.passed('subject')"></i>
                    <i class="fa fa-close" aria-hidden="true"
                        v-show="fields.dirty('subject') && errors.has('subject')"></i>
                </label>
                <select name="subject" class="form-control" id="subject" v-validate data-rules="required">
                    <option value="">Choisissez un sujet...</option>
                    <option value="Travail">Je veux travailler avec vous</option>
                    <option value="Aide">J'ai besoin d'aide</option>
                    <option value="Salution">J'aimerais seulement vous dire bonjour</option>
                </select>
                <span v-show="errors.has('subject')" class="help-block">S'il vous plaît choisissez un sujet</span>
            </div>
        
            <div class="form-group has-feedback" :class="{
                'has-error': fields.dirty('message') && errors.has('message'),
                'has-success': fields.passed('message')}">
                <label for="message" class="control-label">Message
                    <i class="fa fa-check" aria-hidden="true" v-show="fields.passed('message')"></i>
                    <i class="fa fa-close" aria-hidden="true"
                        v-show="fields.dirty('message') && errors.has('message')"></i>
                </label>
                <textarea name="message" id="message" class="form-control"  placeholder="Tapez votre message ici"
                    v-validate data-rules="required"></textarea>
                <span v-show="errors.has('message')" class="help-block">S'il vous plaît entrez votre message</span>
            </div>
    
            <div class="form-group">
                <button
                    name="submit"
                    type="submit"
                    class="btn btn-yellow">
                    <span class="fa fa-send"></span>
                        <span v-show="!sending"></span>Envoyer
                </button>
            </div>

        </form>
    </div>
@stop